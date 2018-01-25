@extends('include/head')
<div style="position:absolute; top: 50px; left: 50%" id="flash-message-success" class="alert alert-success text-center" role="alert">
  Tak for din henvendelse, vi vender tilbage hurtigst muligt<br />
  Kærlig Hilsen - Flamingo team
</div>

@if($flash = session('message'))
  <div style="position:absolute; top: 50px; left: 50%" id="flash-message-success" class="alert alert-success" role="alert">
     {{ $flash }}
  </div>
@endif
