<?php namespace Dadleyy\Lvpress\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends Eloquent {

  protected $table = 'wp_terms';
  protected $guarded = array();
  protected $primaryKey = 'term_id';
  public $timestamps = false;

  public function taxonomy() {
    return $this->hasMany('Dadleyy\Lvpress\Models\TermTaxonomy', 'term_id', 'term_id');
  }

}

?>
