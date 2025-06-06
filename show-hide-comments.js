// Show/Hide Comments
jQuery(document).ready(function() {

	// Get #comment-section div
	var commentsDiv = jQuery('#comment-wrap');

	// Only do this work if that div isn't empty
	if (commentsDiv.length) {

	// Hide #comments div by default
	jQuery(commentsDiv).hide();

	// Append a link to show/hide
        jQuery('<a/>')
                .attr('class', 'toggle-comments h3')
                .attr('href', '#')
                .html(arcShowHideData.show_label)
                .insertBefore(commentsDiv);

	// Encase button in #toggle-comments-container span
	jQuery('.toggle-comments').wrap(jQuery('<div/>', {
		id: 'toggle-comments-container'
	}))

	// When show/hide is clicked
	jQuery('.toggle-comments').on('click', function(e) {
		e.preventDefault();

	// Show/hide the div using jQuery's toggle()
	jQuery(commentsDiv).toggle('slow', function() {
	// change the text of the anchor
                var anchor = jQuery('.toggle-comments');
                var anchorText = anchor.html() == arcShowHideData.show_label ? arcShowHideData.hide_label : arcShowHideData.show_label;
                jQuery(anchor).html(anchorText);
	});
	});
 
	} // End of commentsDiv.length

}); // End of Show/Hide Comments