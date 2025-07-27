@props(['tag', 'size' => 'base'])
@php
    $classes = "rounded-xl bg-white/16 py-1 text-xs transition-colors duration-300 hover:bg-white/25";

    if($size == 'base'){
        $classes .= " px-5 text-sm";
    } 
    if($size == 'small'){
        $classes .= " px-2 text-2x";
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{  $tag->name }}</a>
