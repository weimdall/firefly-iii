<?php

return [
    // general stuff:
    'test'                          => 'Nederlands geselecteerd!',
    'close'                         => 'Sluiten',
    'pleaseHold'                    => 'Momentje...',
    'actions'                       => 'Acties',
    'edit'                          => 'Wijzig',
    'delete'                        => 'Verwijder',
    'welcomeBack'                   => 'Hoe staat het er voor?',
    'everything'                    => 'Alles',
    'customRange'                   => 'Zelf bereik kiezen',
    'apply'                         => 'Go',
    'cancel'                        => 'Annuleren',
    'from'                          => 'Van',
    'to'                            => 'Tot',
    'showEverything'                => 'Laat alles zien',
    'never'                         => 'Nooit',
    'search_results_for'            => 'Zoekresultaten voor ":query"',

    // csv import:
    'csv_import'                    => 'Importeer CSV-bestand',
    'csv'                           => 'CSV',
    'csv_index_title'               => 'Upload en importeer een kommagescheiden tekstbestand',
    'csv_index_text'                => 'Met deze (en de komende) pagina\'s kan je kommagescheiden tekstbestanden importeren. Deze tool is gebaseerd '
                                       . 'op de prachtige tool van <a href="https://www.atlassian.com/">Atlassian</a>. Om te beginnen selecteer' .
                                       ' je jouw tekstbestand bij "CSV-bestand". '
                                       . 'Als je hulp nodig hebt, klik dan op het <i class="fa fa-question-circle"></i>-icoontje rechtsboven.',
    'csv_index_beta_warning'        => 'Deze tool is nog erg experimenteel. Wees dus voorzichtig.',
    'csv_header_help'               => 'Zet hier een vinkje als de eerste rij van je tekstbestand bestaat uit kolomnamen, en niet uit daadwerkelijke gegevens.',
    'csv_date_help'                 => 'Het gebruikte datumformaat in jouw bestand. Gebruik het formaat zoals <a href="https://secure.' .
                                       'php.net/manual/en/datetime.createfromformat.php#refsect1-datetime.createfromformat-parameters">deze' .
                                       ' pagina</a> het uitlegt (Engels). Het standaardformaat kan omgaan met data zoals deze: ' . date('Ymd'),
    'csv_csv_file_help'             => 'Voer hier je kommagescheiden tekstbestand in. Je kan er maar één tegelijkertijd invoeren.',
    'csv_csv_config_file_help'      => 'Voer hier je configuratiebestand in. Als je deze niet hebt, geen zorgen. Latere stappen leggen dit uit.',
    'csv_upload_button'             => 'Begin de import',
    'csv_define_column_roles'       => 'Bepaal kolominhoud',
    'csv_column_roles_title'        => 'Bepaal de inhoud van elke kolom',
    'csv_column_roles_text'         => 'Firefly kan niet automatisch ontdekken wat elke kolom betekent. Je moet het zelf aangeven. Gebruik de' .
                                       ' voorbeeldgegevens als je het ook niet zeker weet. Klik op het <i class="fa fa-question-circle"></i>-icoontje ' .
                                       'rechtsboven om te ontdekken wat elke kolomsoort precies is. Als de kolominhoud een directe relatie heeft met gegevens' .
                                       ' die al in Firefly staan, gebruik dan het vinkje. Tijdens de volgende stap komt Firefly hier dan op terug.',
    'csv_column'                    => 'CSV-kolom',
    'cvs_column_name'               => 'CSV-kolomnaam',
    'cvs_column_example'            => 'Voorbeeldgegevens',
    'cvs_column_role'               => 'Kolom bevat?',
    'csv_do_map_value'              => 'Directe relatie?',
    'csv_column__ignore'            => '(negeer deze kolom)',
    'csv_column_account-iban'       => 'Betaalrekening (IBAN)',
    'csv_column_account-id'         => 'Betaalrekening (ID gelijk aan Firefly)',
    'csv_column_account-name'       => 'Betaalrekeningnaam',
    'csv_column_amount'             => 'Bedrag',
    'csv_column_bill-id'            => 'Contract (ID gelijk aan Firefly)',
    'csv_column_bill-name'          => 'Contractnaam',
    'csv_column_budget-id'          => 'Budget (ID gelijk aan Firefly)',
    'csv_column_budget-name'        => 'Budgetnaam',
    'csv_column_category-id'        => 'Categorie (ID gelijk aan Firefly)',
    'csv_column_category-name'      => 'Categorienaam',
    'csv_column_currency-code'      => 'Valutacode (ISO 4217)',
    'csv_column_currency-id'        => 'Valuta (ID gelijk aan Firefly)',
    'csv_column_currency-name'      => 'Valutanaam',
    'csv_column_currency-symbol'    => 'Valuta',
    'csv_column_date-rent'          => 'Datum (renteberekening)',
    'csv_column_date-transaction'   => 'Datum (transactie)',
    'csv_column_description'        => 'Beschrijving',
    'csv_column_opposing-iban'      => 'Tegenrekening (IBAN)',
    'csv_column_opposing-id'        => 'Tegenrekening (ID gelijk aan Firefly)',
    'csv_column_opposing-name'      => 'Tegenrekeningnaam',
    'csv_column_rabo-debet-credit'  => 'Rabobankspecifiek bij/af indicator',
    'csv_column_sepa-ct-id'         => 'SEPA transactienummer',
    'csv_column_sepa-ct-op'         => 'SEPA tegenrekeningnummer',
    'csv_column_sepa-db'            => 'SEPA "direct debet"-nummer',
    'csv_column_tags-comma'         => 'Tags (kommagescheiden)',
    'csv_column_tags-space'         => 'Tags (spatiegescheiden)',
    'csv_column_roles_table'        => 'Kolominhoud',
    'csv_continue'                  => 'Naar de volgende stap',
    'csv_go_back'                   => 'Terug naar de vorige stap',
    'csv_map_values'                => 'Leg relaties met kolomwaardes',
    'csv_map_title'                 => 'Leg relaties met kolomwaardes',
    'csv_map_text'                  => 'Sommige kolommen bevatten waardes die misschien al in Firefly bestaan. Selecteer hier de juiste combinaties' .
                                       'zodat het importeren netjes aansluit bij je huidige gegevens.',
    'cvs_field_value'               => 'Veldwaarde',
    'csv_field_mapped_to'           => 'Is gelijk aan',
    'csv_do_not_map'                => 'Geen relatie',
    'csv_download_config_title'     => 'Download importconfiguratie',
    'csv_download_config_text'      =>
        'Firefly is klaar om je bestand te importeren. De instellingen en selecties die je zojuist hebt gemaakt kan je downloaden'
        . ' en opslaan. Bij de volgende keer kan je dit bestand ook uploaden. Als je kommagescheiden bestand dezelfde indeling'
        . ' heeft, zullen alle selecties goed staan. Dat scheelt weer!',
    'csv_more_information_text'     => 'Ook als het importeren fout gaat is dit bestand handig. Na het importeren krijg je nogmaals de gelegenheid dit bestand'
                                       . 'te downloaden.',
    'csv_do_download_config'        => 'Download het configuratiebestand',
    'csv_process_title'             => 'Het importeren is klaar',
    'csv_row'                       => 'Rij',
    'csv_error_see_logs'            => 'De logboeken bevatten mogelijk meer details.',
    'csv_process_new_entries'       => 'Firefly heeft :imported nieuwe transactie(s) gemaakt.',
    'csv_start_over'                => 'Begin opnieuw',
    'csv_to_index'                  => 'Naar de index',
    'csv_process_text'              => ':rows rijen zijn verwerkt.',
    'csv_import_with_errors'        => 'Er was één fout. Deze foutmelding is mogelijk in het Engels.|Er zijn :errors fouten opgetreden. De foutmeldingen'
                                       . ' zijn mogelijk in het Engels.',
    'csv_specifix_RabobankDescription' => 'Vink dit aan als je Rabobank bestanden importeert.',
    'csv_specifix_Dummy'               => 'Dit vinkje doet niks (dummy).',
    // create new stuff:
    'create_new_withdrawal'         => 'Nieuwe uitgave',
    'create_new_deposit'            => 'Nieuwe inkomsten',
    'create_new_transfer'           => 'Nieuwe overschrijving',
    'create_new_asset'              => 'Nieuwe betaalrekening',
    'create_new_expense'            => 'Nieuwe crediteur',
    'create_new_revenue'            => 'Nieuwe debiteur',
    'create_new_piggy_bank'         => 'Nieuw spaarpotje',
    'create_new_bill'               => 'Nieuw contract',

    // currencies:
    'create_currency'               => 'Maak nieuwe munteenheid',
    'edit_currency'                 => 'Wijzig munteenheid ":name"',

    // new user:
    'submit'                        => 'Invoeren',
    'getting_started'               => 'Aan de start!',
    'to_get_started'                => 'Begin met de naam van de bank waar je je betaalrekening hebt, en het saldo van die rekening.',
    'savings_balance_text'          => 'Voer ook het saldo van je spaarrekening in, als je die hebt.',
    'cc_balance_text'               => 'Als je een credit card hebt, vul dan hier je credit cardlimiet in.',

    // forms:
    'mandatoryFields'               => 'Verplichte velden',
    'optionalFields'                => 'Optionele velden',
    'options'                       => 'Opties',
    'something'                     => 'Iets!',

    // budgets:
    'create_new_budget'             => 'Maak een nieuw budget',
    'store_new_budget'              => 'Sla nieuw budget op',
    'availableIn'                   => 'Beschikbaar in :date',
    'transactionsWithoutBudget'     => 'Uitgaven zonder budget',
    'transactionsWithoutBudgetDate' => 'Uitgaven zonder budget in :date',
    'createBudget'                  => 'Maak nieuw budget',
    'inactiveBudgets'               => 'Inactieve budgetten',
    'without_budget_between'        => 'Transacties zonder budget tussen :start en :end',
    'budget_in_month'               => ':name in :month',
    'delete_budget'                 => 'Verwijder budget ":name"',
    'edit_budget'                   => 'Wijzig budget ":name"',
    'update_amount'                 => 'Bedrag bijwerken',

    // bills:
    'delete_bill'                   => 'Verwijder contract ":name"',
    'edit_bill'                     => 'Wijzig contract ":name"',

    // accounts:
    'details_for_asset'             => 'Overzicht voor betaalrekening ":name"',
    'details_for_expense'           => 'Overzicht voor crediteur ":name"',
    'details_for_revenue'           => 'Overzicht voor debiteur ":name"',
    'details_for_cash'              => 'Overzicht voor contant geldrekening ":name"',

    'store_new_asset_account'       => 'Sla nieuwe betaalrekening op',
    'store_new_expense_account'     => 'Sla nieuwe crediteur op',
    'store_new_revenue_account'     => 'Sla nieuwe debiteur op',

    'edit_asset_account'            => 'Wijzig betaalrekening ":name"',
    'edit_expense_account'          => 'Wijzig crediteur ":name"',
    'edit_revenue_account'          => 'Wijzig debiteur ":name"',

    'delete_asset_account'          => 'Verwijder betaalrekening ":name"',
    'delete_expense_account'        => 'Verwijder crediteur ":name"',
    'delete_revenue_account'        => 'Verwijder debiteur ":name"',

    'asset_deleted'                 => 'Betaalrekening ":name" is verwijderd.',
    'expense_deleted'               => 'Crediteur ":name" is verwijderd.',
    'revenue_deleted'               => 'Debiteur ":name" is verwijderd.',

    'update_asset_account'          => 'Wijzig betaalrekening',
    'update_expense_account'        => 'Wijzig crediteur',
    'update_revenue_account'        => 'Wijzig debiteur',

    'make_new_asset_account'        => 'Nieuwe betaalrekening',
    'make_new_expense_account'      => 'Nieuwe crediteur',
    'make_new_revenue_account'      => 'Nieuwe debiteur',

    'asset_accounts'                => 'Betaalrekeningen',
    'expense_accounts'              => 'Crediteuren',
    'revenue_accounts'              => 'Debiteuren',
    'account_type'                  => 'Account type',

    // some extra help:
    'accountExtraHelp_asset'        => '',
    'accountExtraHelp_expense'      =>
        'Een crediteur is een persoon of een bedrijf waar je geld aan moet betalen. Je staat bij ze in het krijt. Een verwarrende' .
        ' term misschien, maar zo werkt het nou eenmaal. De supermarkt, je huurbaas of de bank zijn crediteuren. Jouw ' .
        'geld (krediet) gaat naar hen toe. De term komt uit de wereld van de boekhouding. De uitgaves die je hier ziet zijn ' .
        'positief, want je kijkt uit hun perspectief. Zodra jij afrekent in een winkel, komt het geld er bij hen bij (positief).',
    'accountExtraHelp_revenue'      => 'Als je geld krijgt van een bedrijf of een persoon is dat een debiteur. ' .
                                       'Dat kan salaris zijn, of een andere betaling. ' .
                                       ' Ze hebben een schuld (debet) aan jou. De term komt uit de wereld van de boekhouding.' .
                                       ' De inkomsten die je hier ziet zijn negatief, want je kijkt uit hun perspectief. Zodra een debiteur geld naar jou ' .
                                       'overmaakt gaat het er bij hen af (negatief).',

    // categories:
    'new_category'                  => 'Nieuwe categorie',
    'create_new_category'           => 'Nieuwe categorie',
    'without_category'              => 'Zonder categorie',
    'update_category'               => 'Wijzig categorie',
    'edit_category'                 => 'Wijzig categorie ":name"',
    'categories'                    => 'Categorieën',
    'no_category'                   => '(geen categorie)',
    'category'                      => 'Categorie',
    'delete_category'               => 'Verwijder categorie ":name"',

    // transactions:
    'update_withdrawal'             => 'Wijzig uitgave',
    'update_deposit'                => 'Wijzig inkomsten',
    'update_transfer'               => 'Wijzig overschrijving',
    'delete_withdrawal'             => 'Verwijder uitgave ":description"',
    'delete_deposit'                => 'Verwijder inkomsten ":description"',
    'delete_transfer'               => 'Verwijder overschrijving ":description"',

    // new user:
    'welcome'                       => 'Welkom bij Firefly!',
    'createNewAsset'                => 'Maak om te beginnen een nieuwe betaalrekening. Dit is je start van je financiële beheer.',
    'createNewAssetButton'          => 'Maak een nieuwe betaalrekening',


    // home page:
    'yourAccounts'                  => 'Je betaalrekeningen',
    'budgetsAndSpending'            => 'Budgetten en uitgaven',
    'savings'                       => 'Sparen',
    'markAsSavingsToContinue'       => 'Om hier wat te zien stel je je betaalrekeningen in als "spaarrekening".',
    'createPiggyToContinue'         => 'Maak spaarpotjes om hier iets te zien.',
    'newWithdrawal'                 => 'Nieuwe uitgave',
    'newDeposit'                    => 'Nieuwe inkomsten',
    'newTransfer'                   => 'Nieuwe overschrijving',
    'moneyIn'                       => 'Inkomsten',
    'moneyOut'                      => 'Uitgaven',
    'billsToPay'                    => 'Openstaande contracten',
    'billsPaid'                     => 'Betaalde contracten',
    'viewDetails'                   => 'Meer info',
    'divided'                       => 'verdeeld',
    'toDivide'                      => 'te verdelen',

    // menu and titles, should be recycled as often as possible:
    'toggleNavigation'              => 'Navigatie aan of uit',
    'currency'                      => 'Munteenheden',
    'preferences'                   => 'Voorkeuren',
    'logout'                        => 'Uitloggen',
    'searchPlaceholder'             => 'Zoeken...',
    'dashboard'                     => 'Dashboard',
    'currencies'                    => 'Munteenheden',
    'accounts'                      => 'Rekeningen',
    'Asset account'                 => 'Betaalrekening',
    'Default account'               => 'Betaalrekening',
    'Expense account'               => 'Crediteur',
    'Revenue account'               => 'Debiteur',
    'budgets'                       => 'Budgetten',
    'tags'                          => 'Tags',
    'reports'                       => 'Overzichten',
    'transactions'                  => 'Transacties',
    'expenses'                      => 'Uitgaven',
    'income'                        => 'Inkomsten',
    'transfers'                     => 'Overschrijvingen',
    'moneyManagement'               => 'Geldbeheer',
    'piggyBanks'                    => 'Spaarpotjes',
    'bills'                         => 'Contracten',
    'createNew'                     => 'Nieuw',
    'withdrawal'                    => 'Uitgave',
    'deposit'                       => 'Inkomsten',
    'account'                       => 'Rekening',
    'transfer'                      => 'Overschrijving',
    'Withdrawal'                    => 'Uitgave',
    'Deposit'                       => 'Inkomsten',
    'Transfer'                      => 'Overschrijving',
    'bill'                          => 'Contract',
    'yes'                           => 'Ja',
    'no'                            => 'Nee',
    'amount'                        => 'Bedrag',
    'newBalance'                    => 'Nieuw saldo',
    'overview'                      => 'Overzicht',
    'saveOnAccount'                 => 'Sparen op rekening',
    'unknown'                       => 'Onbekend',
    'daily'                         => 'Dagelijks',
    'weekly'                        => 'Wekelijks',
    'monthly'                       => 'Maandelijks',
    'quarterly'                     => 'Elk kwartaal',
    'half-year'                     => 'Elk half jaar',
    'yearly'                        => 'Jaarlijks',

    // reports:
    'reportForYear'                 => 'Jaaroverzicht :year',
    'reportForYearShared'           => 'Jaaroverzicht :year (inclusief gedeelde rekeningen)',
    'reportForMonth'                => 'Maandoverzicht van :date',
    'reportForMonthShared'          => 'Maandoverzicht van :date (inclusief gedeelde rekeningen)',
    'incomeVsExpenses'              => 'Inkomsten tegenover uitgaven',
    'accountBalances'               => 'Rekeningsaldi',
    'balanceStartOfYear'            => 'Saldo aan het begin van het jaar',
    'balanceEndOfYear'              => 'Saldo aan het einde van het jaar',
    'balanceStartOfMonth'           => 'Saldo aan het begin van de maand',
    'balanceEndOfMonth'             => 'Saldo aan het einde van de maand',
    'balanceStart'                  => 'Saldo aan het begin van de periode',
    'balanceEnd'                    => 'Saldo aan het einde van de periode',
    'reportsOwnAccounts'            => 'Overzichten voor je eigen betaalrekeningen',
    'reportsOwnAccountsAndShared'   => 'Overzichten voor je eigen betaalrekeningen en gedeelde rekeningen',
    'splitByAccount'                => 'Per betaalrekening',
    'balancedByTransfersAndTags'    => 'Gecorrigeerd met overschrijvingen en tags',
    'coveredWithTags'               => 'Gecorrigeerd met tags',
    'leftUnbalanced'                => 'Ongecorrigeerd',
    'expectedBalance'               => 'Verwacht saldo',
    'outsideOfBudgets'              => 'Buiten budgetten',
    'leftInBudget'                  => 'Over van budget',
    'sumOfSums'                     => 'Alles bij elkaar',
    'notCharged'                    => '(Nog) niet betaald',
    'inactive'                      => 'Niet actief',
    'difference'                    => 'Verschil',
    'in'                            => 'In',
    'out'                           => 'Uit',
    'topX'                          => 'top :number',
    'showTheRest'                   => 'Laat alles zien',
    'hideTheRest'                   => 'Laat alleen de top :number zien',

    // charts:
    'dayOfMonth'                    => 'Dag vd maand',
    'month'                         => 'Maand',
    'budget'                        => 'Budget',
    'spent'                         => 'Uitgegeven',
    'overspent'                     => 'Teveel uitgegeven',
    'left'                          => 'Over',
    'noBudget'                      => '(geen budget)',
    'maxAmount'                     => 'Maximaal bedrag',
    'minAmount'                     => 'Minimaal bedrag',
    'billEntry'                     => 'Bedrag voor dit contract',
    'name'                          => 'Naam',
    'date'                          => 'Datum',
    'paid'                          => 'Betaald',
    'unpaid'                        => 'Niet betaald',
    'day'                           => 'Dag',
    'budgeted'                      => 'Gebudgetteerd',
    'period'                        => 'Periode',
    'balance'                       => 'Saldo',
    'summary'                       => 'Samenvatting',
    'sum'                           => 'Som',
    'average'                       => 'Gemiddeld',
    'balanceFor'                    => 'Saldo op :name',

    // piggy banks:
    'piggy_bank'                    => 'Spaarpotje',
    'new_piggy_bank'                => 'Nieuw spaarpotje',
    'create_new_piggybank'          => 'Nieuw spaarpotje',
    'account_status'                => 'Rekeningoverzicht',
    'left_for_piggy_banks'          => 'Over voor spaarpotjes',
    'sum_of_piggy_banks'            => 'Som van spaarpotjes',
    'saved_so_far'                  => 'Gespaard',
    'left_to_save'                  => 'Te sparen',
    'add_money_to_piggy_title'      => 'Stop geld in spaarpotje ":name"',
    'remove_money_from_piggy_title' => 'Haal geld uit spaarpotje ":name"',
    'add'                           => 'Toevoegen',
    'remove'                        => 'Verwijderen',
    'max_amount_add'                => 'Hooguit toe te voegen',
    'max_amount_remove'             => 'Hooguit te verwijderen',
    'update_piggy_button'           => 'Wijzig spaarpotje',
    'update_piggy_title'            => 'Wijzig spaarpotje ":name"',
    'details'                       => 'Details',
    'events'                        => 'Gebeurtenissen',
    'target_amount'                 => 'Doelbedrag',
    'start_date'                    => 'Startdatum',
    'target_date'                   => 'Doeldatum',
    'no_target_date'                => 'Geen doeldatum',
    'todo'                          => 'te doen',
    'table'                         => 'Tabel',
    'piggy_bank_not_exists'         => 'Dit spaarpotje bestaat niet meer.',
    'add_any_amount_to_piggy'       => 'Stop geld in dit spaarpotje om het doel van :amount te halen.',
    'add_set_amount_to_piggy'       => 'Stop voor :date :amount in dit spaarpotje om hem op tijd te vullen.',
    'delete_piggy_bank'             => 'Verwijder spaarpotje ":name"',

    // tags
    'delete_tag'                    => 'Verwijder tag ":name"',
    'new_tag'                       => 'Maak nieuwe tag',
    'edit_tag'                      => 'Wijzig tag ":tag"',
    'no_year'                       => 'Zonder jaar',
    'no_maand'                      => 'Zonder jaar',
    'tag_title_nothing'             => 'Standaard tags',
    'tag_title_balancingAct'        => 'Balancing act tags',
    'tag_title_advancePayment'      => 'Advance payment tags',

];
