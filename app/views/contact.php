<?php

$this->layout('master') ?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <button type="submit">Enviar</button>
</form>