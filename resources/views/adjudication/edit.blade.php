@extends('layout.app')
@section('title', 'Edit')
@section('content')

<main id="main" class="main">
    <div id="toast-container" class="toast-top-right"></div>
    <div class="pagetitle">
      <h1>Edit Adjudication Rule</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Adjudication Rules</li>
          <li class="breadcrumb-item active">Edit Adjudication Rule</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <a onclick="goBack()" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="card-body">

              @livewire('adjudication.adjudication-edit', ['diseaseId' => $disease->id])


            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  @endsection

