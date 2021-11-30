<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 dev_basis04
=======
 dev_basis03
=======
 dev_basis02
 master
 master

class Post extends Model
{

 dev_basis04
public function getPaginateByLimit(int $limit_count = 10)
=======
 dev_basis03
public function getPaginateByLimit(int $limit_count = 10)
=======
public function getPaginateByLimit(int $limit_count = 5)
 master
 master
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
 dev_basis04
=======
 dev_basis03
 master
public function getByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
 dev_basis04

protected $fillable = [
    'title',
    'body',
];

=======
=======

=======
class Post extends Model
{
    //
 master
 master
 master
}
