<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	public $siswa = [
        'nik_siswa'     => 'required',
        'nama_siswa'     => 'required',
		'jenis_kelamin_siswa' => 'required'
    ];
     
    public $siswa_errors = [
        'nik_siswa' => [
            'required'    => 'NIK siswa wajib diisi.',
        ],
        'nama_siswa'    => [
            'required' => 'Nama Siswa wajib diisi.'
		],
		'jenis_kelamin_siswa'    => [
            'required' => 'Jenis kelamin wajib diisi.'
		],
    ];
	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
