<?php

function status($status)
{
    if ($status == 1) {
        return '<span class="badge badge-success">Active</span>';
    }
    return '<span class="badge badge-danger">Inactive</span>';
}

function visibility($visibility)
{
    switch ($visibility) {
        case 1:
            return '<span class="badge badge-danger">Not visible</span>';
            break;
        case 2:
            return '<span class="badge badge-info">Catalog</span>';
            break;
        case 3:
            return '<span class="badge badge-info">Search</span>';
            break;
        default:
            return '<span class="badge badge-success">Catalog, Search</span>';
    }
}

function amount($amount)
{
    if (is_int($amount))
        return number_format($amount / 100, 2);
    return $amount;
}