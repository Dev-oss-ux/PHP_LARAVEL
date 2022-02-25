@extends('backEnd.layouts.master')
@section('title','Liste des Categories')
@section('content')

<section>
  @foreach($categories as $category)
  <?php
         $parent_cates = DB::table('Departement')->select('name')->where('id',$departement->id)->get();
   ?>

<form name='monform' action='' method='post'>
<pre>
 <label> Departement</label><input type='text' name='num_produit'>
 <label>Commentaire </label> <textarea name="message"></textarea>
</pre>
<input type='submit' name='envoyer' value='valider'>
</form>
</section>
