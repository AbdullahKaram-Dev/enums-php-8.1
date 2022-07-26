<?php
namespace App\Enums;

enum CourseType: int
{
   case COURSE    = 1;
   case BUNDLE    = 2;
   case TEMPLATE  = 3;

   public function color():string
   {
       return match($this)
       {
           CourseType::COURSE => '#ff0000',
           CourseType::BUNDLE => '#00ff00',
           CourseType::TEMPLATE => '#0000ff',
       };
   }


  public function tut()
  {
    foreach (CourseType::cases() as $key => $value) {
      echo '<h1 style="color:'.$value->color($value->value).'">'.$key . ' => ' . $value->name .'</h1>'.'<br>';
      }

        /* will throw an error if value not exists */
        dump(CourseType::from(2));

        /* will return null if value not exists */
        dump(CourseType::tryFrom(10)?->name);

        dump(CourseType::cases());
        echo CourseType::BOUQUET->color();
        dd(CourseType::COURSE);
  }
}
