<?php

return [

    /*
    |--------------------------------------------------------------------------
    | App main translate
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Global
    'placeholder' => [
        'login' => 'Identifiant',
        'password' => 'Mot de passe',
    ],
    'menu' => [
        'particular' => 'Particulier - Profesionnel',
        'company' => 'Entreprise',
    ],
    'web' => [
        'app' => [
            'name' => 'Application Net',
            'slogan' => 'vos services bancaires accessibles en un seul clic.',
        ]
    ],

    // Table
    'table' => [
        'empty_data' => 'Aucune données disponible dans le tableau',
    ],

    'account' => 'Compte',
    'rib' => 'RIB',
    'amount' => 'Montant',
    'real_sold' => 'Solde Réel',
    'add_date' => 'Date d\'ajout',
    'create_date' => 'Date de creation',
    'op_date' => 'Date d\'operation',
    'add_date_hour' => 'Date et heure d\'ajout',


    'all' => 'Tous',
    'all_f' => 'Toutes',

    // Buttons
    'back' => 'Retour',
    'subscribe' => 'Souscrire',
    'cancel' => 'Annuler',
    'valid' => 'Valider',
    'save' => 'Enregistrer',
    'remove' => 'Supprimer',
    'search' => 'Recherche',
    'advance_search' => 'Recherche avancée',


    'guaranteed_security' => 'Sécurité garantie',
    'innovative_services' => 'Services innovants',
    'accessibility' => 'Accessibilité',
    'contextual_help' => 'Aide contextuelle',
    'support' => 'Support',
    'to_login' => 'Se connecter',
    'authentication' => 'Authentification',
    'ref' => 'Reference',
    'sender_account' => 'Compte Emetteur',
    'beneficiary' => 'Beneficiaire',
    'bank' => 'Banque',
    'account_type' => 'Type de compte',
    'operation_date' => 'Date d\'opération',
    'status' => 'Statut',

    // Jibi Subscription
    'account_type' => 'Type de Compte',
    'phone' => 'Téléphone',
    'phone_number' => 'N° Telephone',
    'operator' => 'Opérateur',
    'email' => 'Email',
    'alias' => 'Alias',
    'id_contact' => 'Id Contact',
    'type' => 'Type',
    'accept_condition' => 'J\'ai lu et j\'accepte les conditions générales d\'utilisation.',

    // Jibi
    'jibi' => [
        // Jibi Recharge
        'title' => 'Jibi',
        'recharge_title' => 'Effectuer une recharge Jibi',
        'recharge_subtitle' => 'Effectuez vos recharge de compte Jibi.',
        'recharge_from' => 'Recharger à partir du compte',
        'select_account' => 'Selectionner un compte',
        'yesterday_sold' => 'Solde de la veille : <span class="text-main">:sold</span>',
        'date' => 'A la date du',
        'pattern' => 'Motif',

        // Jibi Accounts
        'accounts_title' => 'Consultation de mes comptes Jibi',
        'make_recharge' => 'Effectuer une recharge',
        'add_account' => 'Ajouter un compte Jibi',
        'usage' => 'Usage du compte Jibi',

        // Jibi Monitoring
        'monitoring_title' => 'Suivi des recharges Jibi',
        'monitoring_subtitle' => 'Consultez vos recharges de carte initiées sur les 30 derniers jours.',
        'number_account' => 'N° de compte Jibi',
        'operation_date' => 'Date d\'operation',

    ],

    // Transfer
    'transfer' => [
        'title' => 'Effectuer un virement',
        'sub_title' => 'Effectuer vos virement',
        'from_account' => 'Virement du compte',
        'to_account' => 'Vers le compte',
        'real_sold' => 'Solde Réel:  <span class="text-success">:sold :devise</span>',
        'select_beneficiary' => 'Selectionner un beneficiaire',
        'add_beneficiary' => 'Ajouter un beneficiaire',
        'standing_order' => 'Saisir un ordre permament',

        'monitoring_title' => 'Suivi des Virements',
        'monitoring_subtitle' => 'Consulter vos virement initiés sur les 90 jours.',
        'list_title' => 'Liste des virements',

        'ref' => 'Ref.',
        'type' => 'Type',
        'rib_beneficiary' => 'RIB du beneficiaire',
        'name_beneficiary' => 'Nom du beneficiaire',
        'amount_dh' => 'Montant DH',
        'first_execution_date' => 'Premiere date d\'execution',
        'completion_date' => 'Date de fin d\'execution',
        'frequency' => 'Frequence',
        'add_permanent_transfer' => 'Ajouter un virement permanent',

        'management_title' => 'Gestion des beneficiaires de virements',
        'management_subtitle' => 'Consultez la liste de vos bénéficiaires de virements.',
        'beneficiary' => 'Bénéficiaire',
        'beneficiary_list_title' => 'Liste des Beneficiaires',
        'add_beneficiary' => 'Ajouter Beneficiaires',
        'beneficiary_type' => 'Type de beneficiaire',
    ],

    'card' => [
        'card' => 'Cartes', 
        'make_recharge_title' => 'Effectuer une recharge de carte',
        'make_recharge_subtitle' => 'Effectuer vos recharges de carte.',
        'recharge_title' => 'Effectuer une recharge de carte',
        'select_card' => 'Selectionner une carte',
        'to_card' => 'Carte à recharger',
        'add_card' => 'Ajouter une carte',

        'monitoring_title' => 'Suivi des recharge de carte',
        'monitoring_subtitle' => 'Consultez vos recharges de cartes initiées sur les 30 derniers jours.',
        'cards_list_title' => 'Liste des recharges de carte',
        'number' => 'N° carte',
        'beneficiary' => 'Beneficiare',
        'card_beneficiary' => 'Bénéficiare de la  carte',
        'make_recharge' => 'Effectuer une recharge',

        'management_title' => 'Gestion des cartes rechargeables',
        'management_subtitle' => 'Consultez la liste de vos cartes rechargeables.',
        'add_rechargeable' => 'Ajouter carte rechargeable',
        'cards_list_title' => 'Liste des recharges de carte',
        'rechargeable_cards_list' => 'Liste des cartes rechargeables',
        'cardholder' => 'Détenteur de la carte',

        'add_rechargeable_title' => 'Ajouter une carte rechargeable',
        'add_rechargeable_subtitle' => 'Ajouter une carte rechargeable.',
        'rechargeable_holder_name' => 'Nom du porteur de la carte',
        'rechargeable_holder_firstname' => 'Prénom du porteur de la carte',
        'rechargeable_number_card' => 'N° de la carte',

    ],

    'cash_press' => [
        'provision_title' => 'Effectuer une mise a disposition',
        'provision_subtitle' => 'Votre argent est mis à disposition sur tous les GAB pour un retrait sans carte par vos bénéficiaires.',
        'card' => 'Carte',
        'any_card' => 'Aucune carte selectionnées',
        'max_amount' => 'Montant max autorisé : <span class="text-main">:amount</span> :devise',
        'confidential_digit' => 'Code confidentiel (à 4 chiffres)',

        'monitoring_title' => 'Suivi des mise a disposition',
        'monitoring_subtitle' => 'Consultez vos mise à disposition sur les 30 derniers jours.',
        'select_card' => 'Choisissez une carte',
        'provision_list' => 'Liste des mises a disposition',
    ],

    // Setting
    'setting' => [
        'profile_title' => 'Parametres',
        'menu' => [
            'profile' => 'Mes informations personnelles',
            'profile_subtitle' => 'Modifier votre opérateur',

            'accounts' => 'Comptes',
            'accounts_subtitle' => 'Ajouter ou déclarer un compte en transaction',

            'electronic_report_title' => 'Releve Electronique',
            'electronic_report_subtitle' => 'Gérer votre canal de réception de vos relevés bancaires',

            'notifications_title' => 'Notifications',
            'notifications_subtitle' => 'Liste des notifications',

            'password_title' => 'Mot de passe',
            'password_subtitle' => 'Modifier votre mot de passe',

        ],
        'civility' => 'Civilité',
        'name' => 'Nom',
        'firstname' => 'Prénom',
        'email' => 'E-mail',
        'phone' => 'N° GSM',
        'operator' => 'Opérateur',
        'language' => 'Langue',

        'add_account' => 'Ajouter un compte',
        'account_number' => 'N° de Compte',
        'entitled' => 'Intitule',
        'type' => 'Type',
        'canal' => 'Canal',

        'bank_statement' => 'Relevé bancaire reçu par courrier',
        'electronic_readout' => 'Relevé electronique',

        'notifications_list' => 'Liste des notifications',
        'events' => 'Evenement',
        'category' => 'Evenement',
        'moyen' => 'Moyen',
        'hour' => 'Heure',
        'disabled_all' => 'Désactivé tout',

        'password_title' => 'Modifier votre mot de passe',
        'password' => 'Mot de passe',
        'new_password' => 'Nouveau mot de passe',
        'display_password' => 'Afficher mot de passe',
        'change_password' => 'Changer le mot de passe',
    ],

];
