<?php return [
    'plugin'               => [
        'name'        => 'Mall',
        'description' => 'Ecommerce solution for October CMS',
    ],
    'titles'               => [
        'products'         => [
            'create'  => 'Create product',
            'update'  => 'Edit product',
            'preview' => 'Preview product',
        ],
        'categories'       => [
            'create'  => 'Create category',
            'update'  => 'Edit category',
            'preview' => 'Category preview',
        ],
        'orders'           => [
            'show'   => 'Order details',
            'export' => 'Export orders',
        ],
        'discounts'        => [
            'create'  => 'Create discount',
            'update'  => 'Edit discount',
            'preview' => 'Preview discount',
        ],
        'shipping_methods' => [
            'create'  => 'Create shipping method',
            'update'  => 'Edit shipping method',
            'preview' => 'Preview shipping method',
        ],
    ],
    'menu_items'           => [
        'all_categories' => 'All shop categories',
    ],
    'currency_settings'    => [
        'label'           => 'Currencies',
        'description'     => 'Setup your currencies',
        'currencies'      => 'Only enter official 3-char currency codes.',
        'currency_code'   => 'Currency code',
        'currency_format' => 'Format',
    ],
    'general_settings'     => [
        'category'               => 'Mall Shop',
        'label'                  => 'Configuration',
        'description'            => 'General settings',
        'product_page'           => 'Product details page',
        'product_page_comment'   => 'This is where the product details are displayed',
        'category_page'          => 'Category page for products listing',
        'category_page_comment'  => 'Add the "products" component to this page.',
        'auto_pop'               => 'Auto pop cart overlay',
        'auto_pop_comment'       => 'Auto pop the cart overlay after a product was added to the shopping cart',
        'links'                  => 'CMS pages',
        'links_comment'          => 'Choose which pages are used to display your products',
        'customizations'         => 'Customizations',
        'customizations_comment' => 'Customize the features of your shop',
    ],
    'common'               => [
        'shop'                 => 'Shop',
        'products'             => 'Products',
        'product'              => 'Product',
        'orders'               => 'Orders',
        'cart'                 => 'Cart',
        'shipping'             => 'Shipping',
        'taxes'                => 'Taxes',
        'inventory'            => 'Inventory',
        'accessories'          => 'Accessories',
        'shipping_methods'     => 'Shipping methods',
        'accessory'            => 'Accessory',
        'custom_fields'        => 'Custom fields',
        'variants'             => 'Variants',
        'discounts'            => 'Discounts',
        'discount'             => 'Discount',
        'select_placeholder'   => '-- Please choose',
        'main_image'           => 'Main image',
        'images'               => 'Images',
        'attachments'          => 'Images/Downloads',
        'downloads'            => 'Downloads',
        'select_image'         => 'Choose image',
        'select_file'          => 'Choose file',
        'allowed'              => 'Allowed',
        'not_allowed'          => 'Not allowed',
        'seo'                  => 'SEO',
        'properties_links'     => 'Properties/Links',
        'categories'           => 'Categories',
        'category'             => 'Category',
        'out_of_stock'         => 'This product is out of stock.',
        'stock_limit_reached'  => 'You cannot add any more items of this product to your cart since the stock limit has been reached.',
        'meta_title'           => 'Meta title',
        'meta_description'     => 'Meta description',
        'reorder'              => 'Reorder entries',
        'id'                   => 'ID',
        'created_at'           => 'Created at',
        'hide_published'       => 'Hide published',
        'slug'                 => 'URL',
        'name'                 => 'Name',
        'add_value'            => 'Add value',
        'export_orders'        => 'Export orders',
        'use_backend_defaults' => 'Use defaults configured in backend settings',
        'api_error'            => 'Could not save discount. Error while sending changes to the Mall API.',
        'includes_tax'         => 'Including taxes',
    ],
    'variant'              => [
        'method' => [
            'single'  => 'Article',
            'variant' => 'Article variants',
        ],
    ],
    'custom_field_options' => [
        'text'       => 'Textfield',
        'textarea'   => 'Multi-line textfield',
        'dropdown'   => 'Dropdown',
        'checkbox'   => 'Checkbox',
        'add'        => 'Add option',
        'name'       => 'Name',
        'price'      => 'Price',
        'attributes' => 'Attribute',
        'option'     => 'Option',
    ],
    'product'              => [
        'user_defined_id'                      => 'Product ID',
        'name'                                 => 'Product name',
        'published'                            => 'Published',
        'not_published'                        => 'Not published',
        'published_comment'                    => 'This product is visible on the website',
        'stock'                                => 'Stock',
        'price'                                => 'Price',
        'description_short'                    => 'Short description',
        'description'                          => 'Description',
        'weight'                               => 'Weight (g)',
        'length'                               => 'Length (mm)',
        'height'                               => 'Height (mm)',
        'width'                                => 'Width (mm)',
        'quantity_default'                     => 'Default quantity',
        'quantity_min'                         => 'Minimum quantity',
        'quantity_max'                         => 'Maximum quantity',
        'inventory_management_method'          => 'Inventory management method',
        'allow_out_of_stock_purchases'         => 'Allow out of stock purchases',
        'allow_out_of_stock_purchases_comment' => 'This product can be ordered even if it is out of stock',
        'stackable'                            => 'Stack in cart',
        'stackable_comment'                    => 'If this product is added to the cart multiple times only show one entry (increase quantity)',
        'shippable'                            => 'Shippable',
        'shippable_comment'                    => 'This product can be shipped',
        'taxable'                              => 'Taxable',
        'taxable_comment'                      => 'Calculate taxes on this product',
        'add_currency'                         => 'Add currency',
        'is_taxable'                           => 'Use tax',
        'is_not_taxable'                       => 'Use no tax',
        'currency'                             => 'Currency',
        'general'                              => 'General',
        'duplicate_currency'                   => 'You have entered multiple prices for the same currency',
        'property_title'                       => 'Title',
        'property_value'                       => 'Value',
        'link_title'                           => 'Title',
        'link_target'                          => 'Target URL',
        'properties'                           => 'Properties',
        'links'                                => 'Links',
        'price_includes_tax'                   => 'Price includes taxes',
        'price_includes_tax_comment'           => 'The defined price includes all taxes',
    ],
    'category'             => [
        'name'         => 'Name',
        'code'         => 'Code',
        'code_comment' => 'This code can be used to identify this category in your frontend partials.',
        'parent'       => 'Parent',
        'no_parent'    => 'No parent',
    ],
    'custom_fields'        => [
        'name'             => 'Field name',
        'type'             => 'Field type',
        'options'          => 'Options',
        'required'         => 'Required',
        'required_comment' => 'This field is required to place an order',
        'is_required'      => 'Required',
        'is_not_required'  => 'Not required',
    ],
    'tax'                  => [
        'percentage' => 'Percent',
    ],
    'discounts'            => [
        'name'                                 => 'Name',
        'code'                                 => 'Discount code',
        'total_to_reach'                       => 'Minimal order total for discount to be valid',
        'type'                                 => 'Discount type',
        'trigger'                              => 'Valid if',
        'rate'                                 => 'Rate (%)',
        'amount'                               => 'Fixed amount',
        'alternate_price'                      => 'Alternate price',
        'max_number_of_usages'                 => 'Max number of usages',
        'expires'                              => 'Expires',
        'number_of_usages'                     => 'Numer of usages',
        'shipping_description'                 => 'Name of alternative shipping method',
        'shipping_price'                       => 'Price of alternative shipping method',
        'shipping_guaranteed_days_to_delivery' => 'Guaranteed days to delivery',
        'section_type'                         => 'What does this discount do?',
        'section_trigger'                      => 'When is this discount applicable?',
        'types'                                => [
            'fixed_amount'    => 'Fixed amount',
            'rate'            => 'Rate',
            'alternate_price' => 'Alternate price',
            'shipping'        => 'Alternate shipping',
        ],
        'triggers'                             => [
            'total'   => 'Order total is reached',
            'code'    => 'Discount code is entered',
            'product' => 'A specific product is present in the cart',
        ],
    ],
    'order'                => [
        'invoice_number'                      => 'Invoice number',
        'customer'                            => 'Customer',
        'creation_date'                       => 'Created at',
        'modification_date'                   => 'Modified at',
        'completion_date'                     => 'Completed at',
        'credit_card'                         => 'Credit cart',
        'payment_status'                      => 'Payment status',
        'grand_total'                         => 'Grand total',
        'billing_address'                     => 'Billing address',
        'shipping_address'                    => 'Shipping address',
        'currency'                            => 'Currency',
        'status'                              => 'Status',
        'email'                               => 'Email',
        'will_be_paid_later'                  => 'Will be paid later',
        'shipping_address_same_as_billing'    => 'Shipping address is same as billing',
        'credit_card_last4_digits'            => 'Last 4 digits',
        'tracking_number'                     => 'Tracking number',
        'tracking_url'                        => 'Tracking url',
        'shipping_fees'                       => 'Shipping fees',
        'shipping_provider'                   => 'Shipping provider',
        'shipping_method'                     => 'Shipping method',
        'card_holder_name'                    => 'Card holder',
        'card_type'                           => 'Cart type',
        'payment_method'                      => 'Payment method',
        'payment_gateway_used'                => 'Payment gateway',
        'tax_provider'                        => 'Tax provider',
        'lang'                                => 'Language',
        'refunds_amount'                      => 'Refunds amount',
        'adjusted_amount'                     => 'Adjusted amount',
        'rebate_amount'                       => 'Rebate amount',
        'total'                               => 'Total',
        'taxes_total'                         => 'Taxes total',
        'items_total'                         => 'Items total',
        'subtotal'                            => 'Subtotal',
        'taxable_total'                       => 'Taxable total',
        'total_weight'                        => 'Total weight',
        'total_rebate_rate'                   => 'Total rebate',
        'notes'                               => 'Notes',
        'custom_fields'                       => 'Custom fields',
        'shipping_enabled'                    => 'Shipping enabled',
        'payment_transaction_id'              => 'Payment transaction id',
        'change_order_status'                 => 'Change order status',
        'change_payment_status'               => 'Change payment status',
        'items'                               => 'Items',
        'quantity'                            => 'Quantity',
        'shipping_address_is_same_as_billing' => 'Shipping address is same as billing address',
        'update_tracking_info'                => 'Add tracking info',
        'invalid_status'                      => 'The selected status does not exist.',
        'updated'                             => 'Order update successful',
        'modal'                               => [
            'cancel' => 'Cancel',
            'update' => 'Update information',
        ],
    ],
    'order_status'         => [
        'processed' => 'Processed',
        'disputed'  => 'Disputed',
        'shipped'   => 'Shipped',
        'delivered' => 'Delivered',
        'pending'   => 'Pending',
        'cancelled' => 'Cancelled',
    ],
    'shipping_method'      => [
        'guaranteed_delivery_days' => 'Guaranteed delivery in days',
    ],
    'payment_status'       => [
        'paid'          => 'Paid',
        'deferred'      => 'Deferred',
        'paid_deferred' => 'Paid deferred',
        'paiddeferred'  => 'Paid deferred',
        'charged_back'  => 'Charged back',
        'refunded'      => 'Refunded',
        'paidout'       => 'Paidout',
        'failed'        => 'Failed',
        'pending'       => 'Pending',
        'expired'       => 'Expired',
        'cancelled'     => 'Cancelled',
        'open'          => 'Open',
    ],
    'permissions'          => [
        'manage_products'   => 'Can manage products',
        'manage_categories' => 'Can manage categories',
        'manage_orders'     => 'Can manage orders',
        'manage_discounts'  => 'Can manage discounts',
        'settings'          => [
            'manage_general'  => 'Can change general shop settings',
            'manage_api'      => 'Chan change api shop settings',
            'manage_currency' => 'Chan change currecy shop settings',
        ],
    ],
    'components'           => [
        'categories'        => [
            'details'    => [
                'name'        => 'Categories',
                'description' => 'Lists available categories',
            ],
            'properties' => [
                'parent'       => [
                    'title'       => 'Start from category',
                    'description' => 'Only show child categories of this category',
                ],
                'categorySlug' => [
                    'title'       => 'Category slug parameter',
                    'description' => 'Use this parameter to load the parent category from the url',
                ],
                'categoryPage' => [
                    'title'       => 'Category page',
                    'description' => 'Links will point to this page. If nothing is entered the default settings from the backend settings will be used.',
                ],
            ],
            'no_parent'  => 'Show all categories',
            'by_slug'    => 'Use category in url as parent',
        ],
        'cartSummary'       => [
            'details'    => [
                'name'        => 'Cart summary',
                'description' => 'Displays the number of products in and total value of the cart',
            ],
            'properties' => [
                'showItemCount'  => [
                    'title'       => 'Show product count',
                    'description' => 'Displays the count of items in the cart',
                ],
                'showTotalPrice' => [
                    'title'       => 'Show total value',
                    'description' => 'Displays the total value of all items in the cart',
                ],
            ],
        ],
        'customerDashboard' => [
            'details'    => [
                'name'        => 'Customer dashboard',
                'description' => 'Displays a link for the customer to login and change her account settings',
            ],
            'properties' => [
                'customerDashboardLabel' => [
                    'title'       => 'Customer dashboard label',
                    'description' => 'Link text for the customer account page',
                ],
                'logoutLabel'            => [
                    'title'       => 'Logout label',
                    'description' => 'Link text for the logout link',
                ],
            ],
        ],
        'currencyPicker'    => [
            'details' => [
                'name'        => 'Currency picker',
                'description' => 'Shows a picker to select the currently active shop currency',
            ],
        ],
        'products'          => [
            'details'    => [
                'name'        => 'Products',
                'description' => 'Displays a list of products',
            ],
            'properties' => [
                'categoryFilter'      => [
                    'title'       => 'Category filter',
                    'description' => 'Only show products from this category',
                    'no_filter'   => 'Show all products',
                    'by_slug'     => 'Load category from slug',
                ],
                'categorySlug'        => [
                    'title'       => 'Category slug parameter',
                    'description' => 'Use this parameter to load the category from the url',
                ],
                'displayCustomFields' => [
                    'title'       => 'Show custom fields',
                    'description' => 'Show all custom fields directly on the product page',
                ],
                'productsPerPage'     => [
                    'title' => 'Number of products per page',
                ],
                'noProductsMessage'   => [
                    'title'       => '«No products» message',
                    'description' => 'This text will be displayed if a category is empty',
                ],
                'sortOrder'           => [
                    'title'       => 'Sort order',
                    'description' => 'How the products will be sorted',
                ],
                'productPage'         => [
                    'title'       => 'Product page',
                    'description' => 'Product links will point to this page. If nothing is selected, the defaults from the backend settings will be used.',
                ],
            ],
        ],
        'product'           => [
            'details'       => [
                'name'        => 'Product details',
                'description' => 'Displays details of a product',
            ],
            'properties'    => [
                'productSlug' => [
                    'title'       => 'Product url parameter',
                    'description' => 'Use this parameter to load the slug from the url',
                ],
            ],
            'added_to_cart' => 'Added product successfully',
        ],
    ],
];
