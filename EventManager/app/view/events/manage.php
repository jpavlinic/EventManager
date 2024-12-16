<div class="header">
    <h1>Events Management</h1>
    <p>View and manage your events</p>
</div>

<div class="admin">
    
    <!-- Events Section -->
    <section class="admincontainer">
        <div class="formcontainer">
            <h2>Add Event</h2>
            <form id="event">
                <label for="eventname">Name:</label>
                <input type="text" id="eventname" name="name" required>
                <label for="allowednum">Allowed Number:</label>
                <input type="number" id="allowednum" name="allowednum" required>
                <label for="start">Start Date:</label>
                <input type="datetime-local" id="start" name="start" required>
                <label for="end">End Date:</label>
                <input type="datetime-local" id="end" name="end" required>
                <label for="selectvenue">Venue:</label>
                <select id="selectvenue" name="venue">
                    <option value="">None</option>
                    <!-- venue options -->
                </select>
                <button type="submit" class="actionbtn">Add Event</button>
            </form>
        </div>
        <div class="tablecontainer">
            <h2>Events</h2> <br>
            <table>
                <thead>
                    <tr>
                        <th>Event ID</th>
                        <th>Name</th>
                        <th>Allowed Number</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Venue</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Event rows here -->
                </tbody>
            </table>
        </div>
    </section>

</div>


<!-- Detail Popup -->
<dialog id="detail">
    <div>
        <h2>User Details</h2>
        <div>
            <p><strong>User ID:</strong> 1</p>
            <p><strong>First Name:</strong> John</p>
            <p><strong>Last Name:</strong> Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Role:</strong> attendee</p>
        </div> <br>
        <button class="close">Close</button>
    </div>
</dialog>

<!-- Edit Popup -->
<dialog id="edit">
    <div>
    <div class="formcontainer">
            <h2>Edit User</h2>
            <form id="edituser">
                <label for="editfirstname">First Name:</label>
                <input type="text" id="editfirstname" name="firstname" required>
                <label for="editlastname">Last Name:</label>
                <input type="text" id="editlastname" name="lastname" required>
                <label for="editemail">Email:</label>
                <input type="email" id="editemail" name="email" required>
                <label for="editusername">Username:</label>
                <input type="text" id="editusername" name="username" required>
                <label for="editpassword">Password:</label>
                <input type="password" id="editpassword" name="password" required>
                <label for="editrole">Role:</label>
                <select id="editrole" name="role">
                    <option value="attendee">Attendee</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" class="actionbtn">Edit User</button>
            </form>
        </div>
        <button class="close">Close</button>
    </div>
</dialog>

<!-- Delete Popup -->
<dialog id="delete">
    <div>
        <h2>Are you sure you want to delete?</h2>
        <button class="close">Yes</button>
        <button class="close">No</button>
    </div>
</dialog>
