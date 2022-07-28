<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as Pdf;

class BlowJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $bob)
    {
    //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pdf = Pdf::loadView("fuck/one");
        $pdf->save(storage_path() . "/document.pdf");
    }
}
