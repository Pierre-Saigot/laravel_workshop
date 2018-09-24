<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
		protected $fillable = [
			'category_id',
			'post_type', 
			'titre', 
			'description', 
			'start', 
			'end', 
			'price', 
			'status',
			'max_users'
	   	];	
        public function categories(){
                return $this->belongsTo(Categorie::class);
        }
       	public function pictures(){
			return $this->hasOne(Picture::class);
		}
        public function scopePublished($query){
        		return $query->where('status', 'publié');
        }

}
