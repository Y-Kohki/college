<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 dev_basis06
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

public function getPaginateByLimit(int $limit_count = 10)
=======

 dev_basis05
=======
 dev_basis04
=======
 dev_basis03
=======
 dev_basis02
 master
 master
 master

class Post extends Model
{

 dev_basis05
public function getPaginateByLimit(int $limit_count = 10)
=======
 dev_basis04
public function getPaginateByLimit(int $limit_count = 10)
=======
 dev_basis03
public function getPaginateByLimit(int $limit_count = 10)
=======
public function getPaginateByLimit(int $limit_count = 5)
 master
 master
 master
 master
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
 dev_basis06
=======
 dev_basis05
=======
 dev_basis04
=======
 dev_basis03
 master
 master
 master
public function getByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
 dev_basis06
=======
 dev_basis05
=======
 dev_basis04
 master
 master

protected $fillable = [
    'title',
    'body',
];

 dev_basis06
=======
 dev_basis05
 master
public function getPaginate()
{
    return $this->orderBy('updated_at','DESC')->paginate(5);
}

 dev_basis06
=======
=======
=======
=======

=======
class Post extends Model
{
    //
 master
 master
 master
 master
 master
}
