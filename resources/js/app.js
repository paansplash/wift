import $ from "jquery";
window.jQuery = $;
window.$ = $;

// Debugging: Check if jQuery is loaded
console.log("jQuery version:", $.fn ? $.fn.jquery : "Not loaded");
console.log("Checking jQuery inside script:", typeof jQuery !== 'undefined' ? "Loaded" : "Not Loaded");

// Ensure jQuery is loaded before the plugins
import "admin-lte";
import "./bootstrap";

$(document).ready(function () {
    $('#add-row').click(function () {
        let wishlistId = $('#wishlist_id').val(); // FIXED: Use ID instead of class
        let wishlistText = $('#wishlist_id option:selected').text();
        let inventoryId = $('#inventory_id').val();
        let inventoryText = $('#inventory_id option:selected').text();
        let statusId = $('#status_id').val();
        let statusText = $('#status_id option:selected').text();

        // Debugging: Log values to the console
        console.log("Wishlist ID:", wishlistId);
        console.log("Wishlist Text:", wishlistText);
        console.log("Inventory ID:", inventoryId);
        console.log("Inventory Text:", inventoryText);
        console.log("Status ID:", statusId);
        console.log("Status Text:", statusText);

        if (!wishlistId || !inventoryId || !statusId) {
            alert("Please select all fields before adding.");
            return;
        }

        let newRow = `
        <tr>
            <td>
                <input type="hidden" name="wishlist_items[][wishlist_id]" value="${wishlistId}">
                ${wishlistText}
            </td>
            <td>
                <input type="hidden" name="wishlist_items[][inventory_id]" value="${inventoryId}">
                ${inventoryText}
            </td>
            <td>
                <input type="hidden" name="wishlist_items[][status_id]" value="${statusId}">
                ${statusText}
            </td>
            <td><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></td>
        </tr>
        `;

        $('#wishlist-table tbody').append(newRow);
    });

    // Remove row when clicking the remove button
    $(document).on('click', '.remove-row', function () {
        $(this).closest('tr').remove();
    });

    // Prevent form submission if no rows are added
    $('#wishlist-form').submit(function (event) {
        let wishlistItems = [];

        $('#wishlist-table tbody tr').each(function () {
            let wishlistId = $(this).find('input[name="wishlist_items[][wishlist_id]"]').val();
            let inventoryId = $(this).find('input[name="wishlist_items[][inventory_id]"]').val();
            let statusId = $(this).find('input[name="wishlist_items[][status_id]"]').val();

            if (wishlistId && inventoryId && statusId) {
                wishlistItems.push({
                    wishlist_id: wishlistId,
                    inventory_id: inventoryId,
                    status_id: statusId
                });
            }
        });

        if (wishlistItems.length === 0) {
            alert("Please add at least one wishlist item.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        $('#wishlist-items').val(JSON.stringify(wishlistItems)); // Update hidden input field
        console.log("Submitting form with data:", JSON.stringify(wishlistItems)); // Debugging
    });
});
