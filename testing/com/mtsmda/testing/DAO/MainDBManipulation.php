<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 09.08.15
 * Time: 19:15
 * To change this template use File | Settings | File Templates.
 */
interface MainDBManipulation
{
    public function add($object);
    public function update($id);
    public function delete($id);
    public function selectAll();
    public function selectById($id);
}
