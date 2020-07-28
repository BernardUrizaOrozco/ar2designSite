@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Título',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtítulo',
        'maxlength' => 200
    ])
    @formField('tags', [
        'label' => 'Tags'
    ])
    @formField('input', [
        'name' => 'owner',
        'label' => 'Propietario',
        'maxlength' => 200
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Descripción',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
        [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'editSource' => true,
    ])
    @formField('medias', [
        'name' => 'imagenDeProyecto',
        'label' => 'Imagen',
    ])
@stop
