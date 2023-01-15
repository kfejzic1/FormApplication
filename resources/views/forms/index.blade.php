@extends('layouts.layout')
@section('body')

<div class="container mx-auto py-4">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Popunjene forme
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Ime i prezime
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Broj telefona
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Obrazovna institucija
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Opcije</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $form->person }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $form->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $form->phone_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $form->educational_institution }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('form.edit', $form->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <div class='py-3 px-3'>
                {{ $forms->links() }}
            </div>
    </div>
</div>
@endsection