@extends('include/head')
<div style="width: 600px; margin: 100px 0 300px 0;" id="flash-message-success" class="alert alert-success text-center" role="alert">
  Tak for din henvendelse, vi vender tilbage hurtigst muligt<br />
  Kærlig Hilsen - Flamingo team
</div>

@if($flash = session('message'))
  <div id="flash-message-success" class="alert alert-success" role="alert">
     {{ $flash }}
  </div>
@endif
