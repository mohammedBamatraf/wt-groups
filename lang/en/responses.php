<?php

return [
    'login' => [
        'not-verified' => 'your account is not verified, please verify it and login again',
        'successful' => 'you have logged in successfully',
        'failed' => 'the credentials you entered are not correct',
    ],
    'register' => [
        'successful' => ' you have registered successfully',
    ],
    'verify-code' => [
        'to-many' => 'You have exceeded the allowed number of entries, please wait :m minuets to tray again',
        'validated' => 'Your email already validated',
        'invalid' => 'invalid code',
        'expired' => 'your code is expired',
        'email' => 'there is no account with this email',
    ],
    'forget-password' => [
        'too-many-tries' => 'You have surpassed the number of permitted attempts try again after :m ',
        'email-not-verified' => 'Your email address has not been verified.',
        'email-not-found' => 'The email address you entered was not found.',
        'email-format' => 'invalid email format',
    ],
    'reset-password' => [
        'updated' => 'Password Updated',
    ],
    'check-code' => [
        'exist' => 'the Verification Code is incorrect',
        '4-digits' => 'Verification Code should consist of only 4 digits',
        'expired-code' => 'Verification Code is Expired',
    ],
    'create-trip' => [
        'belong' => 'vehicle doest belong to this driver',
        'after' => 'the time of the trip most be grater than the current time',
        'successful' => 'trip added successfully',
    ],
    'vehicle' => [
        'create' => 'the vehicle has been add successfully',
        'delete' => [
            'successfully' => 'The car has been successfully deleted',
            'error' => 'This vehicle cannot be deleted because it is associated with a trip.',
            'not_found' => 'car not found',
            'not_authorization' => 'You cannot delete a vehicle that you do not own',
        ],
        'update' => [
            'successfully' => 'The car has been successfully updated',
            'error' => 'This vehicle cannot be updated because it is associated with a trip.',
            'not_found' => 'car not found',
            'not_authorization' => 'You cannot update a vehicle that you do not own',
        ],
        'delete_image' => [
            'not_authorization' => 'You cannot delete a vehicle image that you do not own.',
            'not_found' => 'The car not found',
            'successfully' => 'Image deleted successfully.',
        ],
    ],
    'delete-trip' => [
        'booked' => 'You can\'t delete this trip because it is already booked trip',
        'successful' => 'trip deleted successfully',
        'not-found' => 'the trip in not found',
        'not-yours' => 'you can not delete trip not yous',
    ],
    'sort-error' => [
        'sort-not-allowed' => 'Requested sort `:not-allowed` is not allowed. Allowed sort are `:allowed`.',
    ],
    'filter-error' => [
        'filter-not-allowed' => 'Requested filter `:not-allowed` is not allowed. Allowed filter are `:allowed`.',
    ],
    'driver-vehicle' => [
        'no-vehicle' => 'This Driver Doesn\'t Have Vehicles',
    ],

    'from_date_grater' => "the field 'starts_before' must be smaller than 'starts_after' ",
    'update-trip' => [
        'booked' => 'You can\'t update this trip because it is already booked trip',
        'successful' => 'trip update successfully',
        'not-found' => 'the trip in not found',
        'not-yours' => 'you can not update trip not yous',
    ],
    'booking' => [
        'create' => 'booking completed successfully',
        'create_failed' => 'There are not enough seats',
    ],
    'trip-search' => [
        'no-content' => 'there is no trips',
    ],
    'favorite-trip' => [
        'successful' => 'trip added to the favorite list successful',
        'deleted' => 'trip hsa been deleted form the favorite list',
    ],
    'not-found' => 'not found',
    'customer-booking-not-found' => 'sorry , there is no booking for you yet',
];
