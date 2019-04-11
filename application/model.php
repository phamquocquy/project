<?php
class model{
    //lay tat ca cac ban ghi
    public function fetch($sql){
        global $link;
        $result = mysqli_query($link,$sql);
        $arr = array();
        while ($rows = mysqli_fetch_array($result))
            $arr[] = $rows;
        return $arr;
    }
    //truy van tra ve 1 phan tu
    public function fetch_one($sql){
        global $link;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    //thuc thi cau lenh sql
    public function execute($sql){
        global $link;
        mysqli_query($link,$sql);
    }
    //dem so luong ban ghi
    public function num_row($sql){
        global $link;
        $result = mysqli_query($link,$sql);
        //ham tra ve so luong cac ban ghi
        return mysqli_num_rows($result);
    }
}