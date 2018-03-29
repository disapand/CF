<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $content
 * @property int $count
 * @property int $share
 * @property int $trash
 * @property int $top
 * @property int $show
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTrash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $sort
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereSort($value)
 */
class News extends Model
{
    protected $fillable = [
      'title','author','content','count','share','top','show','trash','sort','zrbj','url','count'
    ];

}
