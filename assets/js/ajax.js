// Function to fetch and render gallery items in the dashboard
function loadAdminGallery() {
    const container = $('#existing-gallery-list');
    container.addClass('ajax-loading-placeholder').html('<p class="text-center text-muted"><i class="fas fa-spinner fa-spin me-2"></i> Loading existing gallery items...</p>');

    $.ajax({
        url: 'fetch_gallery.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            let html = '<div class="row">';
            if (data.length > 0) {
                data.forEach(item => {
                    // Create HTML structure for each item with delete buttons
                    html += `
                        <div class="col-md-4 mb-3">
                            <div class="card p-2 border">
                                <img src="${item.path}" alt="${item.title}" class="w-100 mb-2" style="max-height: 150px; object-fit: cover;">
                                <h6>${item.title}</h6>
                                <button class="vs-btn style3 btn-sm delete-gallery-item" data-id="${item.id}">Delete</button>
                            </div>
                        </div>
                    `;
                });
            } else {
                html += '<div class="col-12"><p class="text-center text-muted">No gallery items found.</p></div>';
            }
            html += '</div>';
            container.removeClass('ajax-loading-placeholder').html(html).addClass('loaded');
        },
        error: function() {
            container.removeClass('ajax-loading-placeholder').html('<p class="text-center text-danger">Error loading gallery data.</p>').addClass('loaded');
        }
    });
}

// Call the function when the dashboard page loads and when the tab is shown
$(document).ready(function() {
    if ($('#adminTabs').length) {
        loadAdminGallery();
        // You would also call a similar function for loadAdminProducts() here
    }
});