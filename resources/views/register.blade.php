<!-- register.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    @include('common.css')
</head>
<body>

<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Registration form
              </h2>
            </div>
            <form action="/register_new_user" method="POST">
              @csrf
              <div>
                <label for="full_name"> Full Name:<span class="text-danger">*</span></label>
                <input type="text" name="full_name" placeholder="Full Name " required>
              </div>
              <div>
              <label for="contact_no"> Contact_no :</label>
                <input type="text" name="contact_no" placeholder="Contact" required>
              </div>

              <div>
              <label for="username"> username :</label>
                <input type="text" name="username" placeholder="username" required>
              </div>

              <div>
              <label for="password"> password :</label>
                <input type="text" name="password" placeholder="password" required>
              </div>

              <div>
              <label for="role">Select Role:</label>
            <select name="role" id="role">
                <option value="">Select a Role</option>
                @foreach ($response_data as $i=>$data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
              </div>

              
              <div class="d-flex ">
                <button>
                  SEND
                </button type >
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
</section>
</body>
</html>
