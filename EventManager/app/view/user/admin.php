<div class="header">
    <h1>Admin Management</h1>
    <p>View and manage your events and registrations</p>
</div>

<div class="admin">

 <!-- User Section -->
    <section class="admincontainer">
        <div class="formcontainer">
            <h2>Users Management</h2>
            <button class="actionbtn" onclick="window.location.href='<?php echo PROJECT_URL ?>/users/manage'">Edit Users</button>
        </div>
        <div class="tablecontainer">
            <h2>Users</h2> <br>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john.doe@example.com</td>
                        <td>attendee</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john.doe@example.com</td>
                        <td>attendee</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Venues Section -->
    <section class="admincontainer">
        <div class="formcontainer">
        <h2>Venues Management</h2>
        <button class="actionbtn" onclick="window.location.href='<?php echo PROJECT_URL ?>/venues/manage'">Edit Venues</button>
        </div>
        <div class="tablecontainer">
            <h2>Venues</h2> <br>
            <table>
                <thead>
                    <tr>
                        <th>Venue ID</th>
                        <th>Name</th>
                        <th>Capacity</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Venue rows here -->
                </tbody>
            </table>
        </div>
    </section>

    <!-- Events Section -->
    <section class="admincontainer">
        <div class="formcontainer">
        <h2>Events Management</h2>
        <button class="actionbtn" onclick="window.location.href='<?php echo PROJECT_URL ?>/events/manage'">Edit Events</button>
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
                    </tr>
                </thead>
                <tbody>
                    <!-- Event rows here -->
                </tbody>
            </table>
        </div>
    </section>

    <!-- Attendees Section -->
    <section class="admincontainer">
        <div class="formcontainer">
        <h2>Attendees Management</h2>
        <button class="actionbtn" onclick="window.location.href='<?php echo PROJECT_URL ?>/attendees/manage'">Edit Attendees</button>
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


