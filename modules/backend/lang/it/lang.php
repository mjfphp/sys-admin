<?php

return [
    'auth' => [
        'title' => 'Area di Amministrazione'
    ],
    'field' => [
        'invalid_type' => 'Il tipo di campo :type non è valido.',
        'options_method_not_exists' => 'La classe :model deve definire un metodo :method() che ritorni le opzioni per il campo ":field".'
    ],
    'widget' => [
        'not_registered' => "Nessun widget ':name' è stato registrato",
        'not_bound' => "Nessun widget ':name' è stato legato al controller",
    ],
    'page' => [
        'untitled' => 'Senza titolo',
        'access_denied' => [
            'label' => 'Accesso negato',
            'help' => "Non hai le autorizzazioni necessarie per accedere a questa pagina.",
            'cms_link' => 'Ritorna al pannello di controllo'
        ],
        'invalid_token' => [
            'label' => 'Token di protezione non valido'
        ]
    ],
    'partial' => [
        'not_found_name' => "La vista parziale ':name' non è stata trovata."
    ],
    'account' => [
        'sign_out' => 'Esci',
        'login' => 'Accedi',
        'reset' => 'Reimposta',
        'restore' => 'Ripristina',
        'login_placeholder' => 'login',
        'password_placeholder' => 'password',
        'forgot_password' => 'Password dimenticata?',
        'enter_email' => 'Inserisci in tuo indirizzo e-mail',
        'enter_login' => 'Inserisci il tuo username.',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Inserisci una nuova password',
        'password_reset' => 'Reimposta password',
        'restore_success' => 'Le istruzioni per reimpostare la password sono state inviate al tuo indirizzo e-mail.',
        'restore_error' => "Nessun utente con username ':login' è stato trovato.",
        'reset_success' => 'La tua password è stata reimpostata con successo. Ora puoi effettuare l\'accesso.',
        'reset_error' => 'I dati forniti per la reimpostazione della password non sono validi. Riprova!',
        'reset_fail' => 'Impossibile ripristinare la password!',
        'apply' => 'Applica',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Larghezza',
        'full_width' => 'intera larghezza',
        'manage_widgets' => 'Gestisci widget',
        'add_widget' => 'Aggiungi widget',
        'widget_inspector_title' => 'Configurazione widget',
        'widget_inspector_description' => 'Configura il widget',
        'widget_columns_label' => 'Larghezza :columns',
        'widget_columns_description' => 'La larghezza del widget, un numero compreso tra 1 e 10.',
        'widget_columns_error' => 'La larghezza del widget deve essere un numero compreso tra 1 e 10.',
        'columns' => '{1} colonna|[2,Inf] colonne',
        'widget_new_row_label' => 'Forza nuova riga',
        'widget_new_row_description' => 'Inserisci il widget su una nuova riga.',
        'widget_title_label' => 'Titolo del widget',
        'widget_title_error' => 'Il titolo del widget è obbligatorio.',
        'reset_layout' => 'Reimposta layout',
        'reset_layout_confirm' => 'Reimpostare il layout ai valori predefiniti?',
        'reset_layout_success' => 'Il layout è stato reimpostato',
        'make_default' => 'Rendi predefinito',
        'make_default_confirm' => 'Impostare il layout corrente come predefinito?',
        'make_default_success' => 'Il layout corrente è ora il predefinito',
        'status' => [
            'widget_title_default' => 'Stato del sistema',
            'update_available' => '{0} aggiornamenti disponibili!|{1} aggiornamento disponibile!|[2,Inf] aggiornamenti disponibili!',
            'updates_pending' => 'Aggiornamenti software in attesa',
            'updates_nil' => 'Il software è aggiornato',
            'updates_link' => 'Aggiorna',
            'warnings_pending' => 'Alcuni problemi hanno bisogno di attenzione',
            'warnings_nil' => 'Nessun avviso da visualizzare',
            'warnings_link' => 'Visualizza',
            'core_build' => 'Build di sistema',
            'event_log' => 'Log eventi',
            'request_log' => 'Log richieste',
            'app_birthday' => 'Online dal',
        ],
        'welcome' => [
            'widget_title_default' => 'Benvenuto',
            'welcome_back_name' => 'Bentornato su :app, :name.',
            'welcome_to_name' => 'Benvenuto su :app, :name.',
            'first_sign_in' => 'Questa è la prima volta che hai eseguito l\'accesso.',
            'last_sign_in' => 'Il tuo ultimo accesso è stato ',
            'view_access_logs' => 'Visualizza log accessi',
            'nice_message' => 'Buona giornata!',
        ]
    ],
    'user' => [
        'name' => 'Amministratore',
        'menu_label' => 'Amministratori',
        'menu_description' => 'Gestisci gli utenti amministratori, i gruppi e le autorizzazioni.',
        'list_title' => 'Gestisci amministratori',
        'new' => 'Nuovo amministratore',
        'login' => 'Login',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'full_name' => 'Nome completo',
        'email' => 'Indirizzo e-mail',
        'groups' => 'Gruppi',
        'groups_comment' => 'Seleziona i gruppi a cui appartiene l\'utente.',
        'avatar' => 'Avatar',
        'password' => 'Password',
        'password_confirmation' => 'Conferma password',
        'permissions' => 'Autorizzazioni',
        'account' => 'Account',
        'superuser' => 'Super User',
        'superuser_comment' => 'Seleziona per consentire all\'utente di accedere a tutte le aree.',
        'send_invite' => 'Invia invito tramite e-mail',
        'send_invite_comment' => 'Invia un messaggio di benvenuto contenente le credenziali per l\'accesso.',
        'delete_confirm' => 'Vuoi davvero eliminare questo amministratore?',
        'return' => 'Ritorna alla lista degli amministratori',
        'allow' => 'Consenti',
        'inherit' => 'Eredita',
        'deny' => 'Nega',
        'group' => [
            'name' => 'Gruppo',
            'name_comment' => 'Il nome viene visualizzato nell\'elenco dei gruppi del form di Creazione/Modifica Amministratore ',
            'name_field' => 'Nome',
            'description_field' => 'Descrizione',
            'is_new_user_default_field_label' => 'Gruppo predefinito',
            'is_new_user_default_field_comment' => 'Aggiungi i nuovi amministratori a questo gruppo per impostazione predefinita.',
            'code_field' => 'Codice',
            'code_comment' => 'Inserisci un codice univoco se vuoi accedere a questo elementro tramite API.',
            'menu_label' => 'Gruppi',
            'list_title' => 'Gestisci gruppi',
            'new' => 'Nuovo gruppo',
            'delete_confirm' => 'Vuoi davvero eliminare questo gruppo amministratore?',
            'return' => 'Ritorna alla lista dei gruppi',
            'users_count' => 'Utenti'
        ],
        'preferences' => [
            'not_authenticated' => 'Non c\'è nessun utente autenticato per cui caricare o salvare le preferenze.'
        ]
    ],
    'list' => [
        'default_title' => 'Elenco',
        'search_prompt' => 'Cerca...',
        'no_records' => 'Nessun risultato trovato.',
        'missing_model' => 'L\'elenco utilizzato nella classe :class non ha un modello definito.',
        'missing_column' => 'Non ci sono colonne definite per :columns.',
        'missing_columns' => 'L\'elenco utilizzato nella classe :class non ha un elenco di colonne definito.',
        'missing_definition' => "L'elenco non contiene una colonna per il campo ':field'.",
        'missing_parent_definition' => "L\'elenco non contiene una definitzione per ':definition'.",
        'behavior_not_ready' => 'Il comportamento "elenco" non è stato inizializzato, controlla di aver chiamato il metodo makeLists() nel controller.',
        'invalid_column_datetime' => "Il valore della colonna ':column' non è un oggetto di tipo DateTime, hai dimenticato un riferimento a \$dates nel modello?",
        'pagination' => 'Record visualizzati: :from-:to di :total',
        'prev_page' => 'Pagina precedente',
        'next_page' => 'Pagina successiva',
        'refresh' => 'Ricarica',
        'updating' => 'Aggiornamento in corso...',
        'loading' => 'Caricamento...',
        'setup_title' => 'Configura elenco',
        'setup_help' => 'Utilizza le checkbox per selezionare le colonne che vuoi visualizzare nell\'elenco. Puoi cambiare la posizione delle colonne trascinandole verso l\'alto o il basso.',
        'records_per_page' => 'Record per pagina',
        'records_per_page_help' => 'Seleziona il numero di record da visualizzare su ogni pagina. Ricorda che un numero elevato di record in una singola pagina può ridurre le prestazioni.',
        'check' => 'Spunta',
        'delete_selected' => 'Elimina selezionati',
        'delete_selected_empty' => 'Non hai selezionato nessun record da eliminare.',
        'delete_selected_confirm' => 'Elimina i record selezionati?',
        'delete_selected_success' => 'I record selezionati sono stati eliminati con successo.',
        'column_switch_true' => 'Sì',
        'column_switch_false' => 'No'
    ],
    'fileupload' => [
        'attachment' => 'Allegato',
        'help' => 'Aggiungi un titolo e una descrizione per questo allegato.',
        'title_label' => 'Titolo',
        'description_label' => 'Descrizione',
        'default_prompt' => 'Fai clic su %s o trascina un file qui per eseguire il caricamento',
        'attachment_url' => 'URL Allegato',
        'upload_file' => 'Carica file',
        'upload_error' => 'Errore nel caricamento',
        'remove_confirm' => 'Sei sicuro?',
        'remove_file' => 'Rimuovi file'
    ],
    'form' => [
        'create_title' => 'Crea :name',
        'update_title' => 'Modifica :name',
        'preview_title' => 'Anteprima :name',
        'create_success' => ':name creato con successo',
        'update_success' => ':name modificato con successo',
        'delete_success' => ':name eliminato con successo',
        'reset_success' => 'Reimpostazione completata',
        'missing_id' => 'L\'ID del record non è stato specificato.',
        'missing_model' => 'Il form utilizzato nella classe :class non ha un modello definito.',
        'missing_definition' => "Il form non contiene il campo ':field'.",
        'not_found' => 'Nessun record con ID :id è stato trovato.',
        'action_confirm' => 'Sei sicuro?',
        'create' => 'Crea',
        'create_and_close' => 'Crea e chiudi',
        'creating' => 'Creazione in corso...',
        'creating_name' => 'Creazione :name in corso...',
        'save' => 'Salva',
        'save_and_close' => 'Salva e chiudi',
        'saving' => 'Salvataggio in corso...',
        'saving_name' => 'Salvataggio :name in corso...',
        'delete' => 'Elimina',
        'deleting' => 'Eliminazione in corso...',
        'confirm_delete' => 'Elimina record?',
        'confirm_delete_multiple' => 'Elimina i record selezionati?',
        'deleting_name' => 'Eliminazione :name in corso...',
        'reset_default' => 'Ripristina predefiniti',
        'resetting' => 'Ripristino in corso',
        'resetting_name' => 'Ripristino :name in corso',
        'undefined_tab' => 'Varie',
        'field_off' => 'Off',
        'field_on' => 'On',
        'add' => 'Aggiungi',
        'apply' => 'Applica',
        'cancel' => 'Annulla',
        'close' => 'Chiudi',
        'confirm' => 'Conferma',
        'reload' => 'Ricarica',
        'complete' => 'Completo',
        'ok' => 'OK',
        'or' => 'o',
        'confirm_tab_close' => 'Vuoi davvero chiudere il tab? Le modifiche non salvate andranno perse.',
        'behavior_not_ready' => 'Il comportamento del form non è stato inizializzato, verifica di aver chiamato il metodo initForm() nel controller.',
        'preview_no_files_message' => 'Non ci sono file caricati.',
        'preview_no_record_message' => 'Nessun record selezionato.',
        'select' => 'Seleziona',
        'select_all' => 'tutti',
        'select_none' => 'nessuno',
        'select_placeholder' => 'seleziona',
        'insert_row' => 'Inserisci riga',
        'insert_row_below' => 'Inserisci riga sotto',
        'delete_row' => 'Elimina riga',
        'concurrency_file_changed_title' => 'Il file è stato cambiato',
        'concurrency_file_changed_description' => "Il file che stavi modificando è stato cambiato da un altro utente. Puoi ricaricare il file e perdere le tue modifiche oppure sovrascrivere il file sul disco.",
        'return_to_list' => 'Ritorna all\'elenco'
    ],
    'recordfinder' => [
        'find_record' => 'Trova record'
    ],
    'relation' => [
        'missing_config' => "La relazione non ha nessuna configurazione per ':config'.",
        'missing_definition' => "La relazione non contiene una definizione per il campo ':field'.",
        'missing_model' => 'La relazione utilizzata nella classe :class non ha un modello definito.',
        'invalid_action_single' => 'L\'azione non può essere eseguita su una relazione singola.',
        'invalid_action_multi' => 'L\'azione non può essere eseguita su una relazione multipla.',
        'help' => 'Fai clic su un elemento per aggiungere',
        'related_data' => 'Dati :name correlati',
        'add' => 'Aggiungi',
        'add_selected' => 'Aggiungi selezionati',
        'add_a_new' => 'Aggiungi nuovo :name',
        'link_selected' => 'Collega selezionati',
        'link_a_new' => 'Collega nuovo :name',
        'cancel' => 'Annulla',
        'close' => 'Chiudi',
        'add_name' => 'Aggiungi :name',
        'create' => 'Crea',
        'create_name' => 'Crea :name',
        'update' => 'Aggiorna',
        'update_name' => 'Aggiorna :name',
        'preview' => 'Visualizza',
        'preview_name' => 'Visualizza :name',
        'remove' => 'Rimuovi',
        'remove_name' => 'Rimuovi :name',
        'delete' => 'Elimina',
        'delete_name' => 'Elimina :name',
        'delete_confirm' => 'Sei sicuro?',
        'link' => 'Collega',
        'link_name' => 'Collega :name',
        'unlink' => 'Scollega',
        'unlink_name' => 'Scollega :name',
        'unlink_confirm' => 'Sei sicuro?'
    ],
    'reorder' => [
        'default_title' => 'Riordina record',
        'no_records' => 'Non ci sono record disponibili per ordinare.'
    ],
    'model' => [
        'name' => 'Modello',
        'not_found' => "Nessun modello ':class' con ID :id trovato.",
        'missing_id' => 'Nessun ID specificato per la ricerca.',
        'missing_relation' => "Il modello ':class' non contiene una definizione per la relazione ':relation'.",
        'missing_method' => "Il modello ':class' non contiene un metodo ':method'.",
        'invalid_class' => "Il modello :model utilizzato nella classe :class non è valido, deve ereditare la classe \Model.",
        'mass_assignment_failed' => "Assegnazione massiva fallita per l'attributo ':attribute' del modello.",
    ],
    'warnings' => [
        'tips' => 'Suggerimenti per la configurazione del sistema',
        'tips_description' => 'Ci sono elementi a cui è necessario prestare attenzione al fine di configurare il sistema in maniera corretta.',
        'permissions'  => 'La cartella :name o le sue sottocartelle non sono scrivibili da PHP. Imposta le corrette autorizzazioni per il server web su questa cartella.',
        'extension' => 'L\'estensione di PHP :name non è installata. Installa questa libreria ed attiva l\'estensione.'
    ],
    'editor' => [
        'menu_label' => 'Preferenze editor di codice',
        'menu_description' => 'Personalizza le impostazioni dell\'editor, come la dimensione del carattere e lo schema di colori.',
        'font_size' => 'Dimensione carattere',
        'tab_size' => 'Dimensione Tab',
        'use_hard_tabs' => 'Indenta utilizzando i Tab',
        'code_folding' => 'Raggruppa il codice',
        'code_folding_begin' => 'Evidenzia inizio',
        'code_folding_begin_end' => 'Evidenzia inizio e fine',
        'autocompletion' => 'Completamento automatico',
        'word_wrap' => 'A capo automatico',
        'highlight_active_line' => 'Evidenzia la linea attiva',
        'auto_closing' => 'Chiudi automaticamente i tag',
        'show_invisibles' => 'Mostra caratteri invisibili',
        'show_gutter' => 'Visualizza numeri di linea',
        'basic_autocompletion'=> 'Completamento automatico di base (Ctrl + Spazio)',
        'live_autocompletion'=> 'Completamento automatico in tempo reale',
        'enable_snippets'=> 'Abilita frammenti di codice (Tab)',
        'display_indent_guides'=> 'Visualizza guide di indentazione',
        'show_print_margin'=> 'Visualizza margini di stampa',
        'mode_off' => 'No',
        'mode_fluid' => 'Fluido',
        '40_characters' => '40 Caratteri',
        '80_characters' => '80 Caratteri',
        'theme' => 'Schema di colori',
        'markup_styles' => 'Stili di markup',
        'custom_styles' => 'Foglio di stile personalizzato',
        'custom styles_comment' => 'Stili personalizzati da includere nell\'editor HTML.',
        'markup_classes' => 'Classi di markup',
        'paragraph' => 'Paragrafo',
        'link' => 'Collegamento',
        'table' => 'Tabella',
        'table_cell' => 'Cella di una tabella',
        'image' => 'Immagine',
        'label' => 'Etichetta',
        'class_name' => 'Nome della classe',
        'markup_tags' => 'Tag di markup',
        'allowed_empty_tags' => 'Tag vuoti consentiti',
        'allowed_empty_tags_comment' => 'L\'elenco dei tag che non sono rimossi quando non hanno nessun contenuto.',
        'allowed_tags' => 'Tag consentiti',
        'allowed_tags_comment' => 'L\'elenco dei tag consentiti.',
        'no_wrap' => 'Tag da non includere in blocchi',
        'no_wrap_comment' => 'L\'elenco dei tag che non devono essere contenuti all\'interno di blocchi di tag.',
        'remove_tags' => 'Tag da rimuovere',
        'remove_tags_comment' => 'L\'elenco dei tag che sono rimossi insieme al loro contenuto.'
    ],
    'tooltips' => [
        'preview_website' => 'Anteprima del sito web'
    ],
    'mysettings' => [
        'menu_label' => 'Impostazioni personali',
        'menu_description' => 'Impostazioni legate al tuo account amministratore'
    ],
    'myaccount' => [
        'menu_label' => 'Il mio account',
        'menu_description' => 'Aggiorna i dettagli del tuo account, come il nome, l\'indirizzo e-mail e la password.',
        'menu_keywords' => 'sicurezza login'
    ],
    'branding' => [
        'menu_label' => 'Personalizza pannello di controllo',
        'menu_description' => 'Personalizza l\'area di amministrazione, come il nome, i colori ed il logo.',
        'brand' => 'Marchio',
        'logo' => 'Logo',
        'logo_description' => 'Carica un logo personalizzato da utilizzare nel pannello di controllo.',
        'app_name' => 'Nome dell\'applicazione',
        'app_name_description' => 'Questo campo verrà visualizzato nella barra del titolo del pannello di controllo.',
        'app_tagline' => 'Slogan dell\'applicazione',
        'app_tagline_description' => 'Questo campo verrà visualizzato nella schermata di login del pannello di controllo.',
        'colors' => 'Colori',
        'primary_color' => 'Principale color',
        'secondary_color' => 'Secondario color',
        'accent_color' => 'Accent color',
        'styles' => 'Stili',
        'custom_stylesheet' => 'Foglio di stile personalizzato',
        'navigation' => 'Navigazione',
        'menu_mode' => 'Stile menu',
        'menu_mode_inline' => 'In linea',
        'menu_mode_tile' => 'Piastrelle',
        'menu_mode_collapsed' => 'Compresso'
    ],
    'backend_preferences' => [
        'menu_label' => 'Preferenze pannello di controllo',
        'menu_description' => 'Gestisci le preferenze del tuo account, come la lingua.',
        'region' => 'Regione',
        'code_editor' => 'Editor di codice',
        'timezone' => 'Fuso orario',
        'timezone_comment' => 'Regola le date visualizzate su questo fuso orario.',
        'locale' => 'Lingua',
        'locale_comment' => 'Seleziona la lingua da utilizzare.',
    ],
    'access_log' => [
        'hint' => 'Questo registro visualizza un elenco dei tentativi di accesso di un amministratore avvenuti con successo. I record sono mantenuti per un totale di :days giorni.',
        'menu_label' => 'Registro accessi',
        'menu_description' => 'Visualizza una lista degli accessi da parte degli amministratori.',
        'created_at' => 'Data e ora',
        'login' => 'Login',
        'ip_address' => 'Indirizzo IP',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'email' => 'Indirizzo e-mail',
    ],
    'filter' => [
        'all' => 'tutto',
        'options_method_not_exists' => "Il modello :model deve definire un metodo :method() che ritorni le opzioni per il filtro ':filter'.",
        'date_all' => 'tutte'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Carica un file CSV',
        'import_file' => 'Importa file',
        'first_row_contains_titles' => 'La prima riga contiene i titoli delle colonne',
        'first_row_contains_titles_desc' => 'Lasciare selezionato se la prima riga nel file CSV è utilizzata come nome di colonna.',
        'match_columns' => '2. Abbina le colonne del file ai campi del database',
        'file_columns' => 'Colonne del file',
        'database_fields' => 'Campi del database',
        'set_import_options' => '3. Imposta opzioni di importazione',
        'export_output_format' => '1. Formato di output dell\'esportazione',
        'file_format' => 'Formato del file',
        'standard_format' => 'Formato standard',
        'custom_format' => 'Formato personalizzato',
        'delimiter_char' => 'Carattere delimitatore',
        'enclosure_char' => 'Qualificatore di testo',
        'escape_char' => 'Carattere di escape',
        'select_columns' => '2. Seleziona le colonne da esportare',
        'column' => 'Colonna',
        'columns' => 'Colonne',
        'set_export_options' => '3. Imposta opzioni di esportazione',
        'show_ignored_columns' => 'Visualizza colonne ignorate',
        'auto_match_columns' => 'Abbinamento automatico colonne',
        'created' => 'Creati',
        'updated' => 'Aggiornati',
        'skipped' => 'Saltati',
        'warnings' => 'Avvisi',
        'errors' => 'Errori',
        'skipped_rows' => 'Righe saltate',
        'import_progress' => 'Progresso importazione',
        'processing' => 'Elaborazione',
        'import_error' => 'Errore di importazione',
        'upload_valid_csv' => 'Si prega di caricare un file CSV valido.',
        'drop_column_here' => 'Rilascia qui la colonna...',
        'ignore_this_column' => 'Ignora questa colonna',
        'processing_successful_line1' => 'Processo di esportazione del file completato!',
        'processing_successful_line2' => 'Il browser ora ti reindirizzerà al download del file.',
        'export_progress' => 'Progresso esportazione',
        'export_error' => 'Errore di esportazione',
        'column_preview' => 'Anteprima colonna',
        'file_not_found_error' => 'File non trovato',
        'empty_error' => 'Nessun dato fornito per l\'esportazione.',
        'empty_import_columns_error' => 'Si prega di specificare alcune colonne da importare.',
        'match_some_column_error' => 'Si prega di abbinare alcune colonne prima di procedere.',
        'required_match_column_error' => 'Si prega di specificare un abbinamento per il campo obbligatorio :label.',
        'empty_export_columns_error' => 'Si prega di specificare alcune colonne da esportare.',
        'behavior_missing_uselist_error' => 'Devi implementare il comportamento del controller ListController con l\'opzione di esportazione "useList" abilitata.',
        'missing_model_class_error' => 'Si prega di specificare la proprietà modelClass per :type',
        'missing_column_id_error' => 'Identificatore di colonna mancante',
        'unknown_column_error' => 'Colonna sconosciuta',
        'encoding_not_supported_error' => 'La codifica del file di origine non è stata riconosciuta. Si prega di selezionare l\'opzione di formato personalizzato con la codifica corretta per importare il file.',
        'encoding_format' => 'Codifica del file',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latino-1, Europa Occidentale)',
            'iso_8859_2' => 'ISO-8859-2 (Latino-2, Europa Centrale)',
            'iso_8859_3' => 'ISO-8859-3 (Latino-3, Europa Meridionale)',
            'iso_8859_4' => 'ISO-8859-4 (Latino-4, Europa Settentrionale)',
            'iso_8859_5' => 'ISO-8859-5 (Latino, Cirillico)',
            'iso_8859_6' => 'ISO-8859-6 (Latinp, Arabo)',
            'iso_8859_7' => 'ISO-8859-7 (Latino, Greco)',
            'iso_8859_8' => 'ISO-8859-8 (Latino, Ebraico)',
            'iso_8859_0' => 'ISO-8859-9 (Latino-5, Turco)',
            'iso_8859_10' => 'ISO-8859-10 (Latino-6, Nordico)',
            'iso_8859_11' => 'ISO-8859-11 (Latino, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latino-7, Baltico)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtico)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Revisione di Europa Occidentale con il simbolo dell\'euro)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ]
];
