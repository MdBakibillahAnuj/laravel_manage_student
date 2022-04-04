<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $student;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function SaveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/img/student-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->age = $request->age;
        self::$student->s_class = $request->s_class;
        self::$student->image = self::$imageUrl;
        self::$student->address = $request->address;
        self::$student->type = $request->type;
        self::$student->save();
    }
    public static function updateData($request)
    {
        self::$student = Student::find($request->student_id);
        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
            self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/img/student-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }else{
            self::$imageUrl = self::$student->image;
        }
        self::$student->name = $request->name;
        self::$student->age = $request->age;
        self::$student->s_class = $request->s_class;
        self::$student->image = self::$imageUrl;
        self::$student->address = $request->address;
        self::$student->type = $request->type;
        self::$student->save();

    }
}
