<?php

declare(strict_types=1);

use App\Http\Controllers\Controller;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Component;

beforeEach()->group('architecture');

test('app')
    ->expect('App')
    ->toUseStrictTypes();

test('commands')
    ->expect('Console\Commands')
    ->toBeClasses()
    ->toExtend(Command::class);

test('events')
    ->expect('Events')
    ->toBeClasses();

test('exceptions')
    ->expect('Exceptions')
    ->toBeClasses()
    ->toExtend(Exception::class)
    ->ignoring('Handler');

test('controllers')
    ->expect('Http\Controllers')
    ->toBeClasses()
    ->toExtend(Controller::class)
    ->ignoring('Controller');

test('middleware')
    ->expect('Http\Middleware')
    ->toBeClasses();

test('requests')
    ->expect('Http\Requests')
    ->toBeClasses()
    ->toExtend(FormRequest::class);

test('listeners')
    ->expect('Listeners')
    ->toBeClasses();

test('models')
    ->expect('App\Models')
    ->toBeClasses()
    ->toExtend(Model::class);

test('providers')
    ->expect('Providers')
    ->toBeClasses()
    ->toExtend(ServiceProvider::class);

test('view components')
    ->expect('View\Components')
    ->toBeClasses()
    ->toExtend(Component::class);

test('enums')
    ->expect('App\Enums')
    ->toBeEnums();
