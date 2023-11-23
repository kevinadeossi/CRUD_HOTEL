@extends('template.main')
@section('title', 'Show Hotel')
@section('content')


    <div class="card">
        <div class="card-header">
            Détails de la chambre
        </div>
        <div class="card-body">
            <div class="card-body">
        
                <p class="card-text">Nom de l'hotel: {{ $hotel->name }}</p>
                
                <p class="card-text">Description de l'hotel: {{ $hotel->description }}</p>
                
                <p class="card-text">Nom de la chambre: {{ $hotel->bedroom_name }}</p>
                    
                <p class="card-text">Prix: {{ $hotel->price }}</p>
        
                <p class="card-text">Nombre de lits: {{ $hotel->beds }}</p>
                
                <p class="card-text">Max d'adulte {{ $hotel->max_adult }}</p>
                
                <p class="card-text">Enfant maximum autorisé: {{ $hotel->child_number }}</p>
                
                <p class="card-text">Attributs {{ $hotel->attributes }}</p>
                
                <p class="card-text">Statut: {{ $hotel->statut }}</p>
            </div>
        </div>
    </div>
                        