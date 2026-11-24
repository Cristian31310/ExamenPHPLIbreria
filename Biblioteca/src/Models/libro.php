<?php

declare(strict_type=0);

class Libro
{
  private string $titulo;
  private string $autor;
  private string $genero;
  private int $anio;
  private int $paginas;
  private string $portada;

  public function __construct(string $titulo, string $autor, string $genero, int $anio, int $paginas, string $portada)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->genero = $genero;
    $this->anio = $anio;
    $this->paginas = $paginas;
    $this->portada = $portada;
  }

  public function existe(): bool
  {
    $biblioteca = "/../../data/biblioteca.txt";
    fopen($biblioteca, 'r');
    return true;
  }
}
