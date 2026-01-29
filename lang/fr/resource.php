<?php

return [
    // resource labels and fields
    'category' => [
        'sections' => [
            'general_information' => 'Informations générales',
        ],
        'navigation' => [
            'label' => 'Catégorie',
            'model_label' => 'Catégorie',
            'model_label_plural' => 'Catégories',
        ],
        'fields' => [
            'name' => 'Nom',
            'slug' => 'Slug',
            'parent_category' => 'Catégorie Parente',
            'sort' => 'Ordre de Tri',
            'is_active' => 'Statut',
            'description' => 'Description',
            'created_at' => 'Créé le',
            'updated_at' => 'Mis à jour le',
        ],
        'actions' => [
            'toggle_status' => 'Changer le statut',
        ],
    ],
    // common fields
    'created_at' => 'Créé le',
    'updated_at' => 'Mis à jour le',

    // notifications
    'notifications' => [
        'success' => [
            'default_title' => 'Succès',
            'default_body' => "L'opération a été effectuée avec succès.",
        ],
        'error' => [
            'default_title' => 'Erreur',
            'default_body' => "Une erreur s'est produite lors du traitement de votre demande.",
        ],
        'warning' => [
            'default_title' => 'Avertissement',
            'default_body' => 'Veuillez être prudent lors de cette action.',
        ],
        'info' => [
            'default_title' => 'Information',
            'default_body' => 'Voici des informations importantes concernant votre action.',
        ],
        'loading' => [
            'default_title' => 'Chargement',
            'default_body' => 'Votre demande est en cours de traitement. Veuillez patienter...',
        ],
        'confirmation' => [
            'default_title' => 'Veuillez confirmer',
            'default_body' => 'Êtes-vous sûr de vouloir continuer ?',
        ],
    ],
];
