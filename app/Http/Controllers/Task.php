<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class Task extends Controller
{
	/**
	 * Атрибуты, для которых разрешено массовое назначение.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];
}
