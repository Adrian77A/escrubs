<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HtmlMinifier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     
        $response = $next($request);

        if (
            $response instanceof \Illuminate\Http\Response &&
            str_contains($response->headers->get('Content-Type'), 'text/html')
        ) {
            $output = $response->getContent();

            // Minificar HTML eliminando espacios, saltos de línea y comentarios
            $output = preg_replace('/<!--(?!\[if).*?-->/', '', $output); // elimina comentarios HTML
            $output = preg_replace('/\s{2,}/', ' ', $output); // elimina múltiples espacios
            $output = preg_replace('/>\s+</', '><', $output); // elimina espacios entre etiquetas

            $response->setContent($output);
        }

        return $response;
    }
}
