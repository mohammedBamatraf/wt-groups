<?php

return [

    'admin' => [
        'add_new_customer' => 'Add new Customer',
        'start_message_customer' => 'The customer',
        'add_new_driver' => 'Add new Driver',
        'start_message_driver' => 'The Driver',
        'end_message' => 'has been added',
        'warning_title' => 'warning',
        'warning_body_for_delete' => 'you can not delete this field because is related to other field',
        'city_delete' => [
            'case1' => 'you can not delete this city because it has clients and trips',
            'case2' => 'you can not delete this city because it has clients',
            'case3' => 'you can not delete this city because it has  trips',
        ],
        'state_delete' => "you can't delete this state because it has cities",
        'success_delete' => 'Deleted successfully',
    ],
];
