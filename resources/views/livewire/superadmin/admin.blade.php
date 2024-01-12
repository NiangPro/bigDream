<div>
    <div class="row gx-3">
        <div class="col-sm-4 col-12">
            <div class="card card-cover rounded-2">
                <div class="contact-card">
                    <a href="#" class="edit-contact-card" data-bs-toggle="modal" data-bs-target="#editContact">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <img src="includes/images/user3.png" alt="Joyce Admin" class="contact-avatar" />
                    <h5>Maia Parkinson</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span>Email: </span>info@example.com
                        </li>
                        <li class="list-group-item">
                            <span>Phone: </span>+2 300-223-4567
                        </li>
                        <li class="list-group-item">
                            <span>Location: </span>Georgia
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editContactLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editContactLabel">
                            Edit Contact
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-3">
                            <div class="col-sm-4 col-12">
                                <div class="mb-3">
                                    <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                        <div class="dz-message needsclick">
                                            <button type="button" class="dz-button">
                                                Update Image.
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-8 col-12">
                                <div class="row gx-3">
                                    <div class="col-6">
                                        <!-- Form Field Start -->
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Full Name" />
                                        </div>

                                        <!-- Form Field Start -->
                                        <div class="mb-3">
                                            <label for="contactNumber" class="form-label">Contact</label>
                                            <input type="text" class="form-control" id="contactNumber" placeholder="Contact" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Form Field Start -->
                                        <div class="mb-3">
                                            <label for="emailId" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailId" placeholder="Email ID" />
                                        </div>

                                        <!-- Form Field Start -->
                                        <div class="mb-3">
                                            <label for="birthDay" class="form-label">Birthday</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datepicker-opens-left" id="birthDay"
                                                    placeholder="DD/MM/YYYY" />
                                                <span class="input-group-text">
                                                    <i class="bi bi-calendar4"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!-- Form Field Start -->
                                        <div class="mb-3">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                            Save Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
