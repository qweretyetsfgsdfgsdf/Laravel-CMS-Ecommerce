<?php return [
    'plugin' => [
        'name' => 'Mall',
        'description' => 'Ecommerce-Plattform für October CMS',
    ],
    'titles' => [
        'products' => [
            'create' => 'Produkt erstellen',
            'update' => 'Produkt bearbeiten',
            'preview' => 'Produkt-Vorschau',
        ],
        'categories' => [
            'create' => 'Kategorie erstellen',
            'update' => 'Kategorie bearbeiten',
            'preview' => 'Kategorie-Vorschau',
        ],
        'orders' => [
            'show' => 'Bestellungsdetails',
            'export' => 'Bestellungen exportieren',
        ],
        'discounts' => [
            'create' => 'Rabatt erstellen',
            'update' => 'Rabatt bearbeiten',
            'preview' => 'Rabatt-Vorschau',
        ],
        'shipping_methods' => [
            'create' => 'Versandart erstellen',
            'update' => 'Versandart bearbeiten',
            'preview' => 'Versandart-Vorschau',
        ],
        'payment_methods' => [
            'create' => 'Zahlungsmethode erstellen',
            'edit' => 'Zahlungsmethode bearbeiten',
            'reorder' => 'Sortieren',
        ],
        'custom_field_options' => [
            'edit' => 'Feldoptionen bearbeiten',
        ],
        'properties' => [
            'create' => 'Eigenschaft erstellen',
            'edit' => 'Eigenschaft bearbeiten',
        ],
        'order_states' => [
            'create' => 'Status erstellen',
            'edit' => 'Status bearbeiten',
            'reorder' => 'Status sortieren',
        ],
        'brands' => [
            'create' => 'Marke erstellen',
            'edit' => 'Marke bearbeiten',
        ],
        'property_groups' => [
            'create' => 'Gruppe erstellen',
            'edit' => 'Gruppe bearbeiten',
        ],
        'customer_groups' => [
            'create' => 'Kundengruppe erstellen',
            'update' => 'Kundengruppe bearbeiten',
        ],
    ],
    'menu_items' => [
        'all_categories' => 'Alle Shop-Kategorien',
    ],
    'currency_settings' => [
        'label' => 'Währungen',
        'description' => 'Einstellungen zu den verwendeten Währungen',
        'currencies' => 'Geben Sie jeweils nur den offiziellen dreistelligen Währungscode ein.',
        'currency_code' => 'Währungscode',
        'currency_decimals' => 'Anz. Dezimalstellen',
        'currency_format' => 'Formatierung',
        'currency_symbol' => 'Symbol',
        'currency_rate' => 'Kurs zu Basiswährung',
    ],
    'payment_gateway_settings' => [
        'label' => 'Zahlungsanbieter',
        'description' => 'Einstellungen zu den Zahlungsanbietern',
        'stripe' => [
            'api_key' => 'Stripe API-Key',
            'api_key_comment' => 'Du findest diesen in deinem Stripe Dashboard',
        ],
        'paypal' => [
            'client_id' => 'PayPal Client-ID',
            'secret' => 'PayPal Secret',
            'test_mode' => 'Test-Modus',
            'test_mode_comment' => 'Führe alle Zahlungen in der PayPal Sandbox aus.',
        ],
    ],
    'general_settings' => [
        'category' => 'Mall',
        'label' => 'Grundkonfiguration',
        'description' => 'Allgemeine Einstellungen',
        'product_page' => 'Produkt-Seite',
        'product_page_comment' => 'Auf dieser Seite werden die Produkt-Details angezeigt',
        'address_page' => 'Adressen-Seite',
        'address_page_comment' => 'Auf dieser Seite muss die addressForm Komponente platziert werden',
        'checkout_page' => 'Checkout-Seite',
        'checkout_page_comment' => 'Auf dieser Seite muss die checkout Komponente platziert werden',
        'account_page' => 'Account-Seite',
        'account_page_comment' => 'Auf dieser Seite muss die myAccount Komponente platziert werden',
        'category_page' => 'Kategorie-Seite für Produkte-Übersicht',
        'auto_pop' => 'Warenkorb nach Hinzufügen anzeigen',
        'auto_pop_comment' => 'Der Warenkorb wird direkt angezeigt, wenn ein Produkt hinzugefügt wurde',
        'links' => 'Verlinkungen',
        'links_comment' => 'Wähle aus, auf welche Seiten für dein Shop verwendet werden sollen',
        'customizations' => 'Optionen',
        'customizations_comment' => 'Globale Konfigurationseinstellungen für deinen Shop',
    ],
    'common' => [
        'shop' => 'Shop',
        'products' => 'Produkte',
        'product' => 'Produkt',
        'orders' => 'Bestellungen',
        'cart' => 'Warenkorb',
        'shipping' => 'Versand',
        'taxes' => 'Steuern',
        'rates' => 'Konditionen',
        'inventory' => 'Lagerbestand',
        'accessories' => 'Zubehör',
        'shipping_methods' => 'Versandarten',
        'accessory' => 'Zubehör',
        'custom_fields' => 'Benutzerdefinierte Felder',
        'variants' => 'Varianten',
        'discounts' => 'Rabatte',
        'discount' => 'Rabatt',
        'select_placeholder' => '-- Bitte wählen',
        'main_image' => 'Hauptbild',
        'images' => 'Bilder',
        'image_set' => 'Bilderset',
        'attachments' => 'Bilder/Downloads',
        'downloads' => 'Downloads',
        'select_image' => 'Bild auswählen',
        'select_file' => 'Datei auswählen',
        'allowed' => 'Erlaubt',
        'not_allowed' => 'Nicht erlaubt',
        'yes' => 'Ja',
        'no' => 'Nein',
        'seo' => 'SEO',
        'properties_links' => 'Eigenschaften/Links',
        'categories' => 'Kategorien',
        'category' => 'Kategorie',
        'meta_title' => 'Meta-Titel',
        'meta_description' => 'Meta-Beschreibung',
        'meta_keywords' => 'Meta-Keywords',
        'reorder' => 'Reihenfolge ändern',
        'id' => 'ID',
        'created_at' => 'Erstellt',
        'updated_at' => 'Aktualisiert',
        'hide_published' => 'Verstecke veröffentlichte',
        'slug' => 'URL',
        'name' => 'Name',
        'group_name' => 'Gruppenname',
        'add_value' => 'Wert hinzufügen',
        'export_orders' => 'Bestellungen exportieren',
        'use_backend_defaults' => 'Standard-Einstellung aus Backend-Settings übernehmen',
        'api_error' => 'Fehler beim Speichern der Änderungen. Die API-Anfrage war fehlerhaft.',
        'includes_tax' => 'Inklusive Steuern',
        'conditions' => 'Konditionen',
        'general' => 'Allgemein',
        'logo' => 'Logo',
        'payment_gateway' => 'Zahlungsgateway',
        'payment_provider' => 'Zahlungsanbieter',
        'payment_methods' => 'Zahlungsmethoden',
        'image' => 'Bild',
        'color' => 'Farbe',
        'unit' => 'Einheit',
        'dont_group' => '-- Nicht gruppieren',
        'properties' => 'Eigenschaften',
        'old_price' => 'Alter Preis',
        'property' => 'Eigenschaft',
        'property_groups' => 'Eigenschaftsgruppen',
        'property_group' => 'Eigenschaftsgruppe',
        'options' => 'Optionen',
        'option' => 'Option',
        'catalogue' => 'Katalog',
        'out_of_stock' => 'Es sind nur noch :quantity Stück von diesem Artikel an Lager',
        'out_of_stock_short' => 'Dieser Artikel ist ausverkauft',
        'stock_limit_reached' => 'Es stehen keine weiteren Stücke dieses Artikels zur Verfügung',
        'deleted_at' => 'Gelöscht am',
        'sort_order' => 'Sortierreihenfolge',
        'order_states' => 'Bestellungs-Status',
        'website' => 'Website',
        'brands' => 'Marken',
        'brand' => 'Marke',
        'sorting_updated' => 'Reihenfolge aktualisiert',
        'not_in_use' => 'Option nicht verwendet',
        'saved_changes' => 'Änderungen gespeichert',
        'none' => '-- Nicht definiert',
        'customers' => 'Kunden',
        'customer_groups' => 'Kundengruppen',
        'customer_group' => 'Kundengruppe',
        'product_or_variant' => 'Produkt/Variante',
    ],
    'variant' => [
        'method' => [
            'single' => 'Artikel',
            'variant' => 'Artikelvarianten',
        ],
    ],
    'properties' => [
        'use_for_variants' => 'Verwende für Varianten',
        'use_for_variants_comment' => 'Diese Eigenschaft unterscheidet sich für die verschiedenen Produkt-Varianten',
        'filter_type' => 'Filter-Typ',
        'filter_types' => [
            'none' => 'Ohne Filtermöglichkeit',
            'set' => 'Mehrfachauswahl',
            'range' => 'Bereichsauswahl',
        ],
    ],
    'custom_field_options' => [
        'text' => 'Textfeld',
        'textarea' => 'Mehrzeiliges Textfeld',
        'dropdown' => 'Auswahlliste',
        'checkbox' => 'Checkbox',
        'color' => 'Farbe',
        'image' => 'Bild/Motiv',
        'add' => 'Option hinzufügen',
        'name' => 'Name',
        'price' => 'Aufpreis',
        'attributes' => 'Attribute',
        'option' => 'Option',
    ],
    'product' => [
        'user_defined_id' => 'Artikelnummer',
        'name' => 'Produktname',
        'published' => 'Veröffentlicht',
        'published_short' => 'Veröffentl.',
        'not_published' => 'Nicht veröffentlicht',
        'published_comment' => 'Dieser Artikel ist im Shop sichtbar',
        'stock' => 'Lagerbestand',
        'price' => 'Preis',
        'description_short' => 'Kurzbeschreibung',
        'description' => 'Beschreibung',
        'weight' => 'Gewicht (g)',
        'length' => 'Länge (mm)',
        'height' => 'Höhe (mm)',
        'width' => 'Breite (mm)',
        'quantity_default' => 'Standard-Bestellmenge',
        'quantity_min' => 'Minimale Bestellmenge',
        'quantity_max' => 'Maximale Bestellmenge',
        'inventory_management_method' => 'Inventarverwaltungs-Methode',
        'allow_out_of_stock_purchases' => 'Nicht-an-Lager-Kauf erlauben',
        'allow_out_of_stock_purchases_comment' => 'Produkt darf bestellt werden, wenn es nicht an Lager ist',
        'stackable' => 'In Warenkorb zusammenfassen',
        'stackable_comment' => 'Beim mehrmaligen Hinzufügen zum Warenkorb diesen Artikel nur einmal auflisten (Anzahl erhöhen)',
        'shippable' => 'Versand möglich',
        'shippable_comment' => 'Dieser Artikel kann versendet werden',
        'taxable' => 'Besteuert',
        'taxable_comment' => 'Auf diesen Artikel fallen Steuern an',
        'add_currency' => 'Währung hinzufügen',
        'is_taxable' => 'Besteuert',
        'is_not_taxable' => 'Nicht besteuert',
        'currency' => 'Währung',
        'general' => 'Allgemein',
        'duplicate_currency' => 'Sie haben für eine Währung mehrere Preise eingetragen.',
        'property_title' => 'Titel',
        'property_value' => 'Wert',
        'link_title' => 'Titel',
        'link_target' => 'Link-Ziel',
        'properties' => 'Eigenschaften',
        'links' => 'Links',
        'price_includes_tax' => 'Preis ist inkl. Steuern',
        'price_includes_tax_comment' => 'Der angegebene Preis enthält bereits alle Steuern',
        'group_by_property' => 'Attribut für Varianten-Gruppierung',
        'price_table_modal' => [
            'title' => 'Übersicht für Preise und Lagerbestand',
            'currency_dropdown' => 'Währung: ',
        ]
    ],
    'image_sets' => [
        'is_main_set' => 'Ist Hauptset',
        'is_main_set_comment' => 'Verwende dieses Set für die Produktbilder',
        'create_new' => 'Erstelle neues Set',
    ],
    'category' => [
        'name' => 'Name',
        'code' => 'Code',
        'code_comment' => 'Dieser Code kann im Frontend zur Identifikation der Kategorie genutzt werden.',
        'parent' => 'Elternelement',
        'no_parent' => 'Kein Elternelement',
        'inherit_property_groups' => 'Übernehme Eigenschaften von Elternkategorie',
        'inherit_property_groups_comment' => 'Für diese Kategorie werden die gleichen Eigenschaften wie für die Elternkategorie verwendet',
    ],
    'custom_fields' => [
        'name' => 'Feldname',
        'type' => 'Typ',
        'options' => 'Optionen',
        'required' => 'Pflichtfeld',
        'required_comment' => 'Dieses Feld muss beim Tätigen einer Bestellung ausgefüllt werden',
        'is_required' => 'Pflichtfeld',
        'is_not_required' => 'Kein Pflichtfeld',
    ],
    'tax' => [
        'percentage' => 'Prozent',
        'countries' => 'Steuer gilt nur für Versand in diese Länder',
        'countries_comment' => 'Wird kein Land ausgewhält gilt die Steuer weltweit.',
    ],
    'discounts' => [
        'name' => 'Name',
        'code' => 'Gutschein-Code',
        'total_to_reach' => 'Gültig ab Bestellwert',
        'type' => 'Gutschein-Typ',
        'trigger' => 'Gültig wenn',
        'rate' => 'Rabatt (%)',
        'amount' => 'Rabatt-Betrag',
        'alternate_price' => 'Alternativer Preis',
        'max_number_of_usages' => 'Maximale Anzahl Anwendungen',
        'expires' => 'Gültig bis',
        'number_of_usages' => 'Anzahl Anwendungen',
        'shipping_description' => 'Name für alternative Versand-Methode',
        'shipping_price' => 'Preis für alternative Versand-Methode',
        'shipping_guaranteed_days_to_delivery' => 'Garantierte Lieferung in Tagen',
        'section_type' => 'Was bewirkt der Gutschein?',
        'section_trigger' => 'Wann ist der Gutschein gültig?',
        'types' => [
            'fixed_amount' => 'Fixer-Rabatt',
            'rate' => 'Prozentualer-Rabatt',
            'alternate_price' => 'Alternativer Preis',
            'shipping' => 'Alternativer Versand-Preis',
        ],
        'triggers' => [
            'total' => 'Bestimmter Bestellwert erreicht wird',
            'code' => 'Gutschein-Code eingegeben wird',
            'product' => 'Bestimmtes Produkt im Warenkorb liegt',
        ],
        'validation' => [
            'empty' => 'Geben Sie einen Gutschein-Code ein.',
            'shipping' => 'Es kann nur ein Gutschein für einen Versandrabatt angewendet werden.',
            'duplicate' => 'Ein Gutschein kann nur einmal verwendet werden.',
            'expired' => 'Der verwendete Gutschein ist nicht mehr gültig.',
            'not_found' => 'Der verwendete Gutschein ist nicht gültig.',
            'usage_limit_reached' => 'Dieser Gutschein wurde zu oft verwendet und ist daher nicht mehr gültig.',
        ],
    ],
    'order' => [
        'order_number' => 'Bestellungsnummer',
        'invoice_number' => 'Rechnungsnummer',
        'customer' => 'Kunde',
        'creation_date' => 'Erstellt am',
        'modification_date' => 'Bearbeitet am',
        'completion_date' => 'Abgeschlossen am',
        'credit_card' => 'Kreditkarte',
        'payment_status' => 'Bezahlstatus',
        'grand_total' => 'Gesamttotal',
        'billing_address' => 'Rechnungsadresse',
        'shipping_address' => 'Versandadresse',
        'currency' => 'Währung',
        'status' => 'Status',
        'email' => 'Email',
        'will_be_paid_later' => 'Wird später bezahlt',
        'shipping_address_same_as_billing' => 'Versandadresse gleich wie Rechnungsadresse',
        'credit_card_last4_digits' => 'Letzte 4 Ziffern',
        'tracking_number' => 'Trackingnummer',
        'tracking_url' => 'Tracking-URL',
        'shipping_fees' => 'Versandkosten',
        'shipping_provider' => 'Spediteur',
        'shipping_method' => 'Versandart',
        'card_holder_name' => 'Kartenhalter',
        'card_type' => 'Kartentyp',
        'payment_method' => 'Zahlungsmethode',
        'payment_gateway_used' => 'Zahlungsgateway',
        'tax_provider' => 'Steuern-Anbieter',
        'lang' => 'Sprache',
        'refunds_amount' => 'Rückerstattungsbetrag',
        'adjusted_amount' => 'Korrigierter Betrag',
        'rebate_amount' => 'Rabatt',
        'total' => 'Total',
        'taxes_total' => 'Steuerntotal',
        'items_total' => 'Artikeltotal',
        'subtotal' => 'Zwischentotal',
        'taxable_total' => 'Steuerbares Total',
        'total_weight' => 'Gesamgtgewicht',
        'total_rebate_rate' => 'Gesamt-Rabatt',
        'notes' => 'Notiz',
        'custom_fields' => 'Benutzerdefinierte Felder',
        'shipping_enabled' => 'Versand aktiv',
        'payment_transaction_id' => 'Transaktions-ID',
        'change_order_status' => 'Bestellungsstatus ändern',
        'change_payment_status' => 'Bezahlstatus ändern',
        'items' => 'Artikel',
        'quantity' => 'Menge',
        'shipping_address_is_same_as_billing' => 'Rechnungs- und Versandadresse sind gleich',
        'update_tracking_info' => 'Sendungsverfolgung hinterlegen',
        'invalid_status' => 'Der ausgewählte Status existiert nicht',
        'updated' => 'Bestellung aktualisiert',
        'modal' => [
            'cancel' => 'Abbrechen',
            'update' => 'Daten aktualisieren',
        ],
        'payment_states' => [
            'pending_state' => 'Zahlung ausstehend',
            'failed_state' => 'Zahlung fehlgeschlagen',
            'refunded_state' => 'Zahlung zurückerstattet',
            'paid_state' => 'Zahlung erhalten',
        ],
    ],
    'shipping_method' => [
        'guaranteed_delivery_days' => 'Garantierte Lieferung in Tagen',
        'available_above_total' => 'Verfügbar wenn Totalbetrag grösser oder gleich',
        'available_below_total' => 'Verfügbar wenn Totalbetrag kleiner',
        'countries' => 'Verfügbar für den Versand in diese Länder',
        'countries_comment' => 'Wird kein Land ausgewählt kann die Versandart weltweit verwendet werden.',
    ],
    'payment_method' => [
        'price_fixed' => 'Aufpreis fix',
        'price_percentage' => 'Aufpreis prozentual (des Gesamttotals)',
    ],
    'payment_status' => [
        'paid' => 'Bezahlt',
        'deferred' => 'Auf Rechnung',
        'paid_deferred' => 'Auf Rechnung bezahlt',
        'paiddeferred' => 'Auf Rechnung bezahlt',
        'charged_back' => 'Zahlung beglichen',
        'refunded' => 'Zahlung rückerstattet',
        'paidout' => 'Ausgezahlt',
        'failed' => 'Zahlung fehlerhaft',
        'pending' => 'Zahlung pendent',
        'expired' => 'Zahlung abgelaufen',
        'cancelled' => 'Zahlung abgebrochen',
        'open' => 'Zahlung ausstehend',
    ],
    'permissions' => [
        'manage_products' => 'Kann Produkte verwalten',
        'manage_categories' => 'Kann Kategorien verwalten',
        'manage_orders' => 'Kann Bestellungen verwalten',
        'manage_discounts' => 'Kann Rabatte verwalten',
        'settings' => [
            'manage_general' => 'Kann die Grundeinstellungen des Shops verändern',
            'manage_api' => 'Kann die API-Konfiguration des Shops verändern',
            'manage_currency' => 'Kann die Währungs-Einstellungen des Shops verändern',
            'manage_payment_methods' => 'Zahlungsmethoden verwalten',
        ],
        'manage_properties' => 'Produkt-Eigenschaften bearbeiten',
        'manage_customer_groups' => 'Kann Kundengruppen verwalten',
    ],
    'components' => [
        'category' => [
            'details' => [
                'name' => 'Kategorie',
                'description' => 'Zeigt alle Produkte in einer Kategorie an',
            ],
            'properties' => [
                'use_url' => 'Verwende Slug aus URL',
                'show_variants' => [
                    'title' => 'Zeige einzelne Varianten an',
                    'description' => 'Zeige nicht nur alle Produkte, sondern auch deren Varianten direkt in der Übersicht an',
                ],
                'product_page' => [
                    'title' => 'Produktdetails-Seite',
                    'description' => 'Seite, auf der die Produkt-Details angezeigt werden',
                ],
            ],
        ],
        'categoryFilter' => [
            'details' => [
                'name' => 'Kategorie-Filter',
                'description' => 'Filtert die Produkte einer Kategorie',
            ],
            'properties' => [
                'showPriceFilter' => [
                    'title' => 'Zeige Preis-Filter an',
                ],
                'includeSliderAssets' => [
                    'title' => 'Binde noUI Slider ein',
                    'description' => 'Lädt die Abhängigkeiten für den noUI Slider via cdnjs',
                ],
            ],
        ],
        'myAccount' => [
            'details' => [
                'name' => 'Benutzeraccount',
                'description' => 'Zeigt dem Kunden alle Informationen zu seinem Bentzerkonto an',
            ],
            'properties' => [
                'page' => [
                    'title' => 'Aktive Unterseite',
                ],
            ],
            'pages' => [
                'orders' => 'Bestellungen',
                'profile' => 'Benutzerprofil',
                'addresses' => 'Adressliste',
            ],
        ],
        'customerProfile' => [
            'details' => [
                'name' => 'Kundenprofil',
                'description' => 'Zeigt ein Formular zur Bearbeitung der Kundendaten an.',
            ],
            'properties' => [
            ],
        ],
        'currencyPicker' => [
            'details' => [
                'name' => 'Währungsauswahl',
                'description' => 'Zeigt eine Auswahl für die aktive Währung an',
            ],
            'properties' => [
            ],
        ],
        'addressList' => [
            'details' => [
                'name' => 'Adressliste',
                'description' => 'Zeigt alle erfassten Adressen eines Kunden an',
            ],
            'properties' => [
            ],
            'errors' => [
                'address_not_found' => 'Die gesuchte Addresse wurde nicht gefunden',
                'cannot_delete_last_address' => 'Sie können Ihre letzte Adresse nicht löschen',
            ],
            'messages' => [
                'address_deleted' => 'Adresse gelöscht',
            ],
        ],
        'ordersList' => [
            'details' => [
                'name' => 'Bestellungsliste',
                'description' => 'Zeigt alle Bestellungen eines Kunden an',
            ],
            'properties' => [
            ],
        ],
        'product' => [
            'details' => [
                'name' => 'Produkt-Details',
                'description' => 'Zeigt die Details zu einem Produkt an',
            ],
            'properties' => [
                'productSlug' => [
                    'title' => 'Produkt URL-Parameter',
                    'description' => 'Verwende diesen Parameter um das Produkt aus der URL zu übernehmen',
                ],
            ],
        ],
        'cart' => [
            'details' => [
                'name' => 'Warenkorb',
                'description' => 'Zeigt den Warenkorb an',
            ],
        ],
        'checkout' => [
            'details' => [
                'name' => 'Checkout',
                'description' => 'Komponente für den Bestellvorgang',
            ],
            'errors' => [
                'missing_settings' => 'Bitte wählen Sie eine Zahlungs- und Versandmethode aus.',
            ],
        ],
        'discountApplier' => [
            'details' => [
                'name' => 'Gutschein-Code Eingabe',
                'description' => 'Zeigt eine Eingabemöglichkeit für Gutscheincodes an',
            ],
        ],
        'shippingSelector' => [
            'details' => [
                'name' => 'Auswahl für Versandmethode',
                'description' => 'Zeige eine Auflistung aller Versandmethoden an',
            ],
            'errors' => [
                'unavailable' => 'Die ausgewählte Versandmethode ist für Ihre Bestellung nicht verfügbar.',
            ],
        ],
        'paymentMethodSelector' => [
            'details' => [
                'name' => 'Auswahl für Zahlungsmethode',
                'description' => 'Zeige eine Auflistung aller Zahlungsmethoden an',
            ],
            'errors' => [
                'unavailable' => 'Die ausgewählte Zahlungsmethode ist für Ihre Bestellung nicht verfügbar.',
            ],
        ],
        'addressSelector' => [
            'details' => [
                'name' => 'Auswahl für Adressen',
                'description' => 'Zeige eine Auflistung aller Adressen eines Kunden an',
            ],
            'errors' => [
            ],
        ],
        'addressForm' => [
            'details' => [
                'name' => 'Bearbeitungsformular für Adressen',
                'description' => 'Zeigt ein Formular an um Adressen zu bearbeiten',
            ],
            'properties' => [
                'address' => [
                    'title' => 'Adresse',
                ],
                'redirect' => [
                    'title' => 'Weiterleitung (nach Speichern)',
                ],
                'set' => [
                    'title' => 'Übernehme die Adresse für die Bestellung als...',
                ],
            ],
            'redirects' => [
                'checkout' => 'Checkout-Seite',
            ],
            'set' => [
                'billing' => 'Rechnungsadresse',
                'shipping' => 'Versandadresse',
            ],
        ],
        'signup' => [
            'details' => [
                'name' => 'Anmeldung',
                'description' => 'Zeigt ein Formular für die Registrierung oder das Login an',
            ],
            'properties' => [
                'redirect' => [
                    'name' => 'Weiterleitung nach Login',
                ],
            ],
            'errors' => [
                'user_is_guest' => 'Sie versuchen sich mit einem Gast-Konto einzuloggen.',
                'unknown_user' => 'Die eingegebenen Login-Daten sind ungültig.',
                'login' => [
                    'required' => 'Geben Sie eine Email-Adresse ein.',
                    'email' => 'Geben Sie eine gültige Email-Adresse ein.',
                    'between' => 'Geben Sie eine gültige Email-Adresse ein.',
                ],
                'password' => [
                    'required' => 'Geben Sie ein Passwort ein.',
                    'max' => 'Das eingegebene Passwort ist zu lang.',
                    'min' => 'Das eingegebene Passwort ist zu kurz. Geben Sie mindestens 8 Zeichen ein.',
                ],
                'password_repeat' => [
                    'required' => 'Bestätigen Sie Ihr Passwort.',
                    'same' => 'Die Passwörter stimmen nicht überein.',
                ],
                'email' => [
                    'required' => 'Geben Sie eine Email ein.',
                    'email' => 'Die Email-Adresse ist ungültig.',
                    'unique' => 'Es existiert bereits ein Benutzerkonto mit dieser Email',
                    'non_existing_user' => 'Es existiert bereits ein Benutzer mit dieser Email. Nutzen Sie die Passwort vergessen Funktion',
                ],
                'name' => [
                    'required' => 'Geben Sie Ihren Namen ein.',
                ],
                'lines' => [
                    'required' => 'Geben Sie Ihre Adresse ein.',
                ],
                'zip' => [
                    'required' => 'Geben Sie Ihre PLZ ein.',
                ],
                'city' => [
                    'required' => 'Geben Sie eine Stadt ein.',
                ],
                'country_id' => [
                    'required' => 'Wählen Sie Ihr Land aus.',
                    'exists' => 'Das ausgewählte Land ist ungültig.',
                ],
                'state_id' => [
                    'required' => 'Wählen Sie Ihr Kanton/Bundesstaat',
                    'exists' => 'Der ausgewählte Wert ist ungültig.',
                ],
            ],
        ],
        'categories' => [
            'details' => [
                'name' => 'Kategorien',
                'description' => 'Listet vorhandene Kategorien auf',
            ],
            'properties' => [
                'parent' => [
                    'title' => 'Startkategorie',
                    'description' => 'Zeige nur dieser Kategorie untergeordnete Kategorien an',
                ],
                'categorySlug' => [
                    'title' => 'Kategorie URL-Parameter',
                    'description' => 'Verwende diesen Parameter um die Startkategorie aus der URL zu übernehmen',
                ],
                'categoryPage' => [
                    'title' => 'Kategorie-Seite',
                    'description' => 'Die Links werden auf diese Seite verweisen. Wenn nichts ausgewählt wird, wird die Page aus den Backend Settings verwendet.',
                ],
            ],
            'no_parent' => 'Zeige alle Kategorien',
            'by_slug' => 'Verwende Kategorie aus URL als Startkategorie',
        ],
        'cartSummary' => [
            'details' => [
                'name' => 'Warenkorb',
                'description' => 'Zeigt die Anzahl Produkte und den Gesamtwert des Warenkorbes an',
            ],
            'properties' => [
                'showItemCount' => [
                    'title' => 'Zeige Produkte-Anzahl',
                    'description' => 'Zeigt an, wie viele Produkte sich im Warenkorb befinden',
                ],
                'showTotalPrice' => [
                    'title' => 'Zeige Gesamtwert',
                    'description' => 'Zeigt den Wert aller Artikel im Warenkorb an',
                ],
            ],
        ],
        'customerDashboard' => [
            'details' => [
                'name' => 'Kundenkonto',
                'description' => 'Zeigt den Link zum Öffnen des Kundenkontos an',
            ],
            'properties' => [
                'customerDashboardLabel' => [
                    'title' => 'Kundenkonto-Text',
                    'description' => 'Link-Text für den Kundenkonto-Link',
                ],
                'logoutLabel' => [
                    'title' => 'Logout-Text',
                    'description' => 'Link-Text für den Logout-Link',
                ],
            ],
        ],
        'products' => [
            'details' => [
                'name' => 'Produkt-Liste',
                'description' => 'Zeigt eine Liste von Produkten an',
            ],
            'properties' => [
                'categoryFilter' => [
                    'title' => 'Kategorie-Filter',
                    'description' => 'Zeige nur Produkte aus dieser Kategorie an.',
                    'no_filter' => 'Alle Produkte anzeigen',
                    'by_slug' => 'Kategorie aus URL übernehmen',
                ],
                'categorySlug' => [
                    'title' => 'Kategorie URL-Parameter',
                    'description' => 'Verwende diesen Parameter um den Kategorie-Filter aus der URL zu übernehmen',
                ],
                'displayCustomFields' => [
                    'title' => 'Zeige Produkt-Optionen an',
                    'description' => 'Zeige Auswahlfelder für Optionen für ein Produkt an',
                ],
                'productsPerPage' => [
                    'title' => 'Anzahl Produkte pro Seite',
                ],
                'noProductsMessage' => [
                    'title' => '«Keine Produkte»-Meldung',
                    'description' => 'Dieser Test wird angezeigt, wenn keine Artikel angezeigt werden können.',
                ],
                'sortOrder' => [
                    'title' => 'Sortierung',
                    'description' => 'Nach welchem Attribut die Produkte sortiert werden.',
                ],
                'productPage' => [
                    'title' => 'Produkt-Seite',
                    'description' => 'Die Produkt-Links werden auf diese Seite verweisen.',
                ],
            ],
        ],
    ],
    'shipping_method_rates' => [
        'from_weight' => 'Von (Gewicht in Gramm)',
        'to_weight' => 'Bis (Gewicht in Gramm)',
    ],
    'products' => [
        'variants_comment' => 'Erstelle verschiedene Varianten des gleichen Produkts',
    ],
    'order_states' => [
        'name' => 'Name',
        'description' => 'Beschreibung',
        'color' => 'Farbe',
        'flag' => 'Spezielle Funktion',
        'flags' => [
            'new' => 'Status für neue Bestellungen setzen',
            'complete' => 'Bestellung gilt als abgeschlossen',
        ],
    ],
    'customer_group' => [
        'code_comment' => 'Dieser Code kann zur Identifikation der Gruppe genutzt werden',
    ],
];