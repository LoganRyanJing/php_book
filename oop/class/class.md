## class
每个类的定义都是以关键词class开头，会面跟着一对换括号,里面包含属性及方法。

一个类可以包含属于自己的常量和变量（称为“属性”）以及函数（称为“方法”）。

```php
<?php
class SimpleClass{
    //声明属性
    public $var = "a default value";
    //声明方法
    public function  dispalyVar(){
        echo $this->var;
    }
}
//实例化对象
$class = new SimpleClass();
//方法引用
$class->dispalyVar();
```