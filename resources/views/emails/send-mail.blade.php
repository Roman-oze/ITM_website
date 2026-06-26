{{-- @extends('layout.dashboard')
@include('include.alerts')
@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Mail Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Send Mail</li>
        </ol>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg rounded-lg">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Send Mail to Users</h5>
                            <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#infoModal">
                                <i class="fas fa-info-circle"></i> Info
                            </button>
                        </div>

                        <div class="card-body p-4">
                            <ul class="nav nav-tabs mb-3 justify-content-center" id="mailTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active advanced-tab" id="batch-tab" data-bs-toggle="tab" href="#batch" role="tab" aria-controls="batch" aria-selected="true">
                                        <i class="fas fa-users"></i> Batch Emails
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link advanced-tab" id="manual-tab" data-bs-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false">
                                        <i class="fas fa-envelope-open-text"></i> Manual Emails
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" id="mailTabContent">
                                <!-- Batch Tab -->
                                <div class="tab-pane fade show active" id="batch" role="tabpanel" aria-labelledby="batch-tab">
                                    <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="batchSelect" class="form-label">Select Batch</label>
                                                <select name="batch_id" id="batchSelect" class="form-select">
                                                    <option value="">Choose Batch</option>
                                                    @foreach ($batches as $batch)
                                                        <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="attachment" class="form-label">Add Attachment</label>
                                                <input type="file" class="form-control P-2" name="attachment" id="attachment">
                                                <small class="text-muted">Supported formats: PDF, DOC, JPG, PNG</small>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message here" required>{{ old('message') }}</textarea>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="fa-regular fa-paper-plane"></i> Send Email</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Manual Emails Tab -->
                                <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                                    <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="emails" class="form-label">Enter Emails (comma-separated)</label>
                                            <input type="text" class="form-control" name="emails" id="emails" placeholder="Enter additional email addresses" value="{{ old('emails') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="attachment" class="form-label">Add Attachment</label>
                                            <input type="file" class="form-control P-2" name="attachment" id="attachment">
                                            <small class="text-muted">Supported formats: PDF, DOC, JPG, PNG</small>
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="messageManual" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message here" required>{{ old('message') }}</textarea>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="fa-regular fa-paper-plane"></i> Send Email</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Mail Management Help</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Use the "Select Batch" tab to send emails to a predefined batch of users. Use the "Manual Emails" tab if you want to manually input email addresses.</p>
                <p>Attachments are optional. Supported file formats include PDF, DOC, JPG, and PNG.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#batchSelect').change(function() {
            var batchId = $(this).val();
            if(batchId) {
                $.ajax({
                    url: '/get-students/' + batchId,
                    type: 'GET',
                    success: function(data) {
                        $('#emails').val(data);
                    },
                    error: function() {
                        alert('Could not retrieve emails for the selected batch');
                    }
                });
            } else {
                $('#emails').val('');
            }
        });
    });
</script>
@endsection --}}


@extends('layout.dashboard') @include('include.alerts') @section('main')
<main class="mail-mgmt-wrapper">
  <div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2
        class="text-white m-0 font-weight-semibold"
        style="font-size: 1.75rem; letter-spacing: -0.5px"
      >
        Mail Management
      </h2>
      <button
        type="button"
        class="btn btn-info-custom"
        data-bs-toggle="modal"
        data-bs-target="#infoModal"
      >
        <i class="fas fa-info-circle mr-2"></i> Info
      </button>
    </div>

    <div class="mail-panel-card p-4 md-p-5">
      <div class="d-flex justify-content-center mb-5">
        <div class="custom-tab-container d-inline-flex p-1">
          <ul class="nav nav-pills" id="mailTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active custom-pill-btn"
                id="batch-tab"
                data-bs-toggle="tab"
                data-bs-target="#batch"
                type="button"
                role="tab"
                aria-controls="batch"
                aria-selected="true"
              >
                <i class="fas fa-users me-2"></i> Group Emails
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link custom-pill-btn"
                id="manual-tab"
                data-bs-toggle="tab"
                data-bs-target="#manual"
                type="button"
                role="tab"
                aria-controls="manual"
                aria-selected="false"
              >
                <i class="fas fa-envelope me-2"></i> Manual Emails
              </button>
            </li>
          </ul>
        </div>
      </div>

      <div class="tab-content" id="mailTabContent">
        <div
          class="tab-pane fade show active"
          id="batch"
          role="tabpanel"
          aria-labelledby="batch-tab"
        >
          <form
            action="{{ route('send.mail.data') }}"
            method="POST"
            enctype="multipart/form-data"
          >
            @csrf
            <div class="row align-items-start mb-4">
              <div class="col-md-6 mb-3 mb-md-0">
                <label for="batchSelect" class="custom-field-label"
                  >Select Batch</label
                >
                <div class="input-field-container">
                  <span class="input-prefix-icon"
                    ><i class="fas fa-users text-blue-muted"></i
                  ></span>
                  <select
                    name="batch_id"
                    id="batchSelect"
                    class="form-select custom-dark-input ps-5"
                  >
                    <option value="">Choose Group</option>
                    @foreach ($batches as $batch)
                    <option value="{{ $batch->batch_id }}">
                      {{ $batch->batch_name }}
                    </option>
                    @endforeach
                  </select>
                </div>
                <div class="custom-field-desc mt-2">
                  Select a batch to send emails to all users in that batch.
                </div>
              </div>

              <div class="col-md-6">
                <label for="attachment" class="custom-field-label"
                  >Attachment</label
                >
                <div class="input-field-container d-flex align-items-stretch">
                  <div
                    class="input-file-display flex-grow-1 d-flex align-items-center ps-3"
                  >
                    <i class="fas fa-paperclip text-blue-muted me-2"></i>
                    <span id="file-chosen-name" class="text-muted-placeholder"
                      >Choose file</span
                    >
                  </div>
                  <label
                    for="attachment"
                    class="btn btn-browse-custom m-0 d-flex align-items-center justify-content-center"
                    >Browse</label
                  >
                  <input
                    type="file"
                    class="d-none"
                    name="attachment"
                    id="attachment"
                  />
                </div>
                <div class="custom-field-desc mt-2">
                  Supported formats: PDF, DOC, JPG, PNG
                </div>
              </div>
            </div>

            <div class="mb-4">
              <label for="message" class="custom-field-label">Message</label>
              <textarea
                class="form-control custom-dark-textarea"
                name="message"
                id="message"
                rows="6"
                placeholder="Enter your message here..."
                required
              >
{{ old('message') }}</textarea
              >
            </div>

            <div class="d-flex justify-content-end pt-2">
              <button type="submit" class="btn btn-send-custom px-4 py-2.5">
                <i class="fa-regular fa-paper-plane me-2"></i> Send Email
              </button>
            </div>
          </form>
        </div>

        <div
          class="tab-pane fade"
          id="manual"
          role="tabpanel"
          aria-labelledby="manual-tab"
        >
          <form
            action="{{ route('send.mail.data') }}"
            method="POST"
            enctype="multipart/form-data"
          >
            @csrf
            <div class="row mb-4">
              <div class="col-md-6 mb-3 mb-md-0">
                <label for="emails" class="custom-field-label">
                  Enter Emails (comma-separated)
                </label>

                <div class="input-field-container">
                  <span class="input-prefix-icon">
                    <i class="fas fa-envelope text-blue-muted"></i>
                  </span>

                  <input
                    type="text"
                    class="custom-dark-input-text"
                    name="emails"
                    id="emails"
                    placeholder="Enter additional email addresses"
                    value="{{ old('emails') }}"
                  />
                </div>

                <div class="custom-field-desc mt-2">
                  Enter multiple emails separated by commas.
                </div>
              </div>

              <div class="col-md-6">
                <label for="attachmentManual" class="custom-field-label"
                  >Attachment</label
                >
                <div
                  class="custom-file-upload-group d-flex align-items-stretch"
                >
                  <div
                    class="input-file-display flex-grow-1 d-flex align-items-center ps-3"
                  >
                    <i class="fas fa-paperclip text-blue-muted me-2"></i>
                    <span
                      id="file-chosen-name-manual"
                      class="text-muted-placeholder"
                      >Choose file</span
                    >
                  </div>
                  <label
                    for="attachmentManual"
                    class="btn btn-browse-custom m-0 d-flex align-items-center justify-content-center"
                    >Browse</label
                  >
                  <input
                    type="file"
                    class="d-none"
                    name="attachment"
                    id="attachmentManual"
                  />
                </div>
                <div class="custom-field-desc mt-2">
                  Supported formats: PDF, DOC, JPG, PNG
                </div>
              </div>
            </div>

            <div class="mb-4">
              <label for="messageManual" class="custom-field-label"
                >Message</label
              >
              <textarea
                class="form-control custom-dark-textarea"
                name="message"
                id="messageManual"
                rows="6"
                placeholder="Enter your message here..."
                required
              >
{{ old('message') }}</textarea
              >
            </div>

            <div class="d-flex justify-content-end pt-2">
              <button type="submit" class="btn btn-send-custom px-4 py-2.5">
                <i class="fa-regular fa-paper-plane me-2"></i> Send Email
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<div
  class="modal fade"
  id="infoModal"
  tabindex="-1"
  aria-labelledby="infoModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-dark-modal">
      <div class="modal-header border-bottom-dark">
        <h5 class="modal-title text-white" id="infoModalLabel">
          Mail Management Help
        </h5>
        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body text-muted-desc">
        <p>
          Use the "Select Batch" tab to send emails to a predefined batch of
          users. Use the "Manual Emails" tab if you want to manually input email
          addresses.
        </p>
        <p>
          Attachments are optional. Supported file formats include PDF, DOC,
          JPG, and PNG.
        </p>
      </div>
      <div class="modal-footer border-top-dark">
        <button
          type="button"
          class="btn btn-secondary-custom"
          data-bs-dismiss="modal"
        >
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<style>
  .mail-mgmt-wrapper {
    background-color: #040d1a;
    min-height: 100vh;
    font-family:
      -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial,
      sans-serif;
  }

  .mail-panel-card {
    background-color: #071426;
    border: 1px solid #10233d;
    border-radius: 12px;
  }

  /* Info Button Specifics */
  .btn-info-custom {
    background-color: transparent;
    border: 1px solid #143564;
    color: #ffffff;
    border-radius: 8px;
    padding: 6px 16px;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
  }

  .btn-info-custom i {
    color: #0091ff;
  }

  .btn-info-custom:hover {
    background-color: #0e274a;
    color: #ffffff;
  }

  /* Tab Layout Elements */
  .custom-tab-container {
    border: 1px solid #14325c;
    border-radius: 8px;
    background-color: #061121;
  }

  .custom-pill-btn {
    background: transparent;
    border: none;
    color: #637b99 !important;
    border-radius: 6px !important;
    padding: 10px 24px !important;
    font-size: 0.95rem;
    font-weight: 500;
    transition: all 0.2s ease;
  }

  .custom-pill-btn.active {
    background-color: transparent !important;
    color: #0091ff !important;
    box-shadow: inset 0 0 0 1px #0091ff;
  }

  /* Form Design Controls */
  .custom-field-label {
    color: #f1f5f9;
    font-weight: 500;
    margin-bottom: 10px;
    font-size: 0.95rem;
  }

  .custom-field-desc {
    color: #4b6584;
    font-size: 0.82rem;
  }

  .input-select-wrapper {
    position: relative;
  }

  .input-prefix-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 4;
    pointer-events: none;
  }

  .text-blue-muted {
    color: #3b5270;
  }

  .custom-dark-input {
    background-color: #0a192f !important;
    border: 1px solid #162e4e !important;
    color: #cbd5e1 !important;
    border-radius: 8px !important;
    padding: 12px 16px !important;
    font-size: 0.95rem;
  }

  .custom-dark-input:focus {
    border-color: #0091ff !important;
    box-shadow: 0 0 0 2px rgba(0, 145, 255, 0.2) !important;
  }

  /* File Attachment Construction Elements */
  .custom-file-upload-group {
    border: 1px solid #162e4e;
    background-color: #0a192f;
    border-radius: 8px;
    overflow: hidden;
  }

  .input-file-display {
    color: #cbd5e1;
    font-size: 0.95rem;
  }

  .text-muted-placeholder {
    color: #4b6584;
  }

  .btn-browse-custom {
    background-color: #112540;
    border-left: 1px solid #162e4e;
    color: #cbd5e1;
    font-size: 0.9rem;
    padding: 0 20px;
    cursor: pointer;
    transition: background-color 0.2s;
  }

  .btn-browse-custom:hover {
    background-color: #1a365d;
    color: #fff;
  }

  /* Textarea Controls */
  .custom-dark-textarea {
    background-color: #0a192f !important;
    border: 1px solid #162e4e !important;
    color: #cbd5e1 !important;
    border-radius: 8px !important;
    padding: 16px !important;
    font-size: 0.95rem;
    resize: vertical;
  }

  .custom-dark-textarea::placeholder {
    color: #4b6584;
  }

  .custom-dark-textarea:focus {
    border-color: #0091ff !important;
    box-shadow: 0 0 0 2px rgba(0, 145, 255, 0.2) !important;
  }

  /* Action Push Actions Button Style */
  .btn-send-custom {
    background-color: #006adc;
    border: none;
    color: #ffffff;
    border-radius: 8px;
    font-weight: 500;
    font-size: 0.95rem;
    transition: background-color 0.2s;
  }

  .btn-send-custom:hover {
    background-color: #0056b3;
  }

  /* Modal Layout Overwrites */
  .custom-dark-modal {
    background-color: #071426;
    border: 1px solid #162e4e;
    border-radius: 12px;
  }

  .border-bottom-dark {
    border-bottom: 1px solid #162e4e;
  }

  .border-top-dark {
    border-top: 1px solid #162e4e;
  }

  .text-muted-desc {
    color: #8ba2bd;
  }

  .btn-secondary-custom {
    background-color: #112540;
    border: 1px solid #162e4e;
    color: #cbd5e1;
  }

  .btn-secondary-custom:hover {
    background-color: #1a365d;
  }

  /* Core Input Field Box Alignment Rules */
.input-field-container,
.custom-file-upload-group {
    background-color: #0a192f;
    border: 1px solid #162e4e;
    border-radius: 8px;

    height: 52px;
    min-height: 52px;

    display: flex;
    align-items: center;

    overflow: hidden;
    width: 100%;
}

.custom-dark-input,
.custom-dark-input-text,
.input-file-display {
    height: 100%;
}

  /* Inner Select Field Dropdown Settings */
  .custom-dark-input {
    background-color: transparent !important;
    border: none !important;
    color: #cbd5e1 !important;
    height: 100% !important;
    width: 100% !important;
    font-size: 0.95rem;
    padding: 0 16px 0 45px !important; /* Matches position icon footprint */
    box-shadow: none !important;
  }

  .custom-dark-input:focus {
    box-shadow: none !important;
  }

  /* Icon Alignment Rules */
  .input-prefix-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 4;
    pointer-events: none;
    display: flex;
    align-items: center;
  }

  .text-blue-muted {
    color: #3b5270;
  }

  /* File Attachment Content Layout */
  .input-file-display {
    color: #cbd5e1;
    font-size: 0.95rem;
    height: 100%;
  }

  .text-muted-placeholder {
    color: #4b6584;
  }

  /* Browse Button Layout Fixes */
  .btn-browse-custom {
    background-color: #112540;
    border: none;
    border-left: 1px solid #162e4e;
    color: #cbd5e1;
    font-size: 0.9rem;
    padding: 0 24px;
    height: 100%;
    cursor: pointer;
    transition: background-color 0.2s;
    border-radius: 0 !important;
  }

  .btn-browse-custom:hover {
    background-color: #1a365d;
    color: #fff;
  }

  /* Labels and Descriptions formatting */
  .custom-field-label {
    color: #f1f5f9;
    font-weight: 500;
    margin-bottom: 10px;
    font-size: 0.95rem;
    display: block;
  }

  .custom-field-desc {
    color: #4b6584;
    font-size: 0.82rem;
  }

  /* Style the option items inside the dark dropdown */
  .custom-dark-input option {
    background-color: #071426 !important; /* Matches your main card panel background */
    color: #cbd5e1 !important; /* Light grey/white readable text */
    padding: 12px !important;
  }

  /* Fix browser-specific native arrow behavior and styling */
  /* target the select element and its dropdown options menu to override browser borders */
  .custom-dark-input,
  .custom-dark-input option {
    border: 1px solid #162e4e !important; /* Changes the white line to your deep blue theme border */
    outline: none !important; /* Removes fallback OS focus outlines */
  }

  /* Specific Chrome/Chromium fix for native dropdown borders */
  .custom-dark-input:-webkit-autofill,
  .custom-dark-input:focus {
    outline: 1px solid #162e4e !important;
  }

  /* Ensure selected options don't default back to white on focus */
  .custom-dark-input:focus option {
    background-color: #0a192f !important;
    color: #ffffff !important;
  }

  /* ------manual----- */
  /* Apply consistent container properties to both dropdowns and inputs */
  .input-field-container {
    background-color: #0a192f !important;
    border: 1px solid #162e4e !important;
    border-radius: 8px !important;
    height: 48px; /* Hard lock identical heights */
    position: relative;
    overflow: hidden;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    width: 100%;
  }

  /* Ensure the text input fields take up 100% height and remove browser defaults */
  .custom-dark-input-text {
    background: transparent !important;
    border: none !important;
    color: #cbd5e1 !important;
    height: 100% !important;
    width: 100% !important;
    font-size: 0.95rem;
    padding: 0 16px 0 45px !important; /* leaves space for the icon */
    box-shadow: none !important;
  }

  .custom-dark-input-text:focus {
    outline: none !important;
    box-shadow: none !important;
  }

  .custom-dark-input-text::placeholder {
    color: #4b6584;
  }
</style>

<script>
  $(document).ready(function () {
    // Monitor file input fields to reflect live chosen file names
    $("#attachment").change(function (e) {
      var fileName = e.target.files[0] ? e.target.files[0].name : "Choose file";
      $("#file-chosen-name")
        .text(fileName)
        .removeClass("text-muted-placeholder");
    });
    $("#attachmentManual").change(function (e) {
      var fileName = e.target.files[0] ? e.target.files[0].name : "Choose file";
      $("#file-chosen-name-manual")
        .text(fileName)
        .removeClass("text-muted-placeholder");
    });

    // AJAX dynamic pipeline fetching email values
    $("#batchSelect").change(function () {
      var batchId = $(this).val();
      if (batchId) {
        $.ajax({
          url: "/get-students/" + batchId,
          type: "GET",
          success: function (data) {
            $("#emails").val(data);
          },
          error: function () {
            alert("Could not retrieve emails for the selected batch");
          },
        });
      } else {
        $("#emails").val("");
      }
    });
  });
</script>
@endsection
