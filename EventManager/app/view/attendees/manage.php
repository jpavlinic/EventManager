<div class="header">
    <h1>Attendees Management</h1>
    <p>View and manage your attendees</p>
</div>

<div class="admin">

<!-- Attendees Section -->
<section class="admincontainer">
        <div class="formcontainer">
            <h2>Add Attendee</h2>
            <form id="attendee">
                <label for="selectEvent">Event:</label>
                <select id="selectEvent" name="event_id" required>
                    <option value="">None</option>
                    <!-- event options -->
                </select>

                <label for="selectAttendee">Attendee:</label>
                <select id="selectAttendee" name="attendee_id" required>
                    <option value="">None</option>
                    <!-- user options -->
                </select>

                <button type="submit" class="actionbtn">Add Attendee</button>
            </form>
        </div>
        <div class="tablecontainer">
            <h2>Attendees</h2> <br>
            <table>
                <thead>
                    <tr>
                        <th>Attendee ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered Events</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Attendee rows here -->
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