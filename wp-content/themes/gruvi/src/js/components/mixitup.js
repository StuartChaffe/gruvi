
jQuery(document).ready(function( $ ) {
	var containerEl = document.querySelector('.mixitup');
	var selectFilter = document.querySelector('.select-filter');
	var loadMoreEl = document.querySelector('#load-more');
	var initialFilter = 'all';
	var hash = window.location.hash.replace(/^#/g, '');

	var currentLimit = 9;
	var incrementAmount = 9;
	// var incrementAmount = 3;

	if (!containerEl) {
		return false;
	}
	if (hash) {
		initialFilter = '.' + hash;
	}

	var mixer = mixitup(containerEl, {
		animation: {
			duration: 100,
			nudge: true,
			reverseOut: false,
		},
		pagination: {
			limit: currentLimit
		},
		load: {
			filter: initialFilter
		}
	});

	// selectFilter.addEventListener('change', function() {
	// 	var selector = selectFilter.value;

	// 	mixer.filter(selector);
	// });

	var container = document.querySelector('[data-ref="mixitup"]');
	var inputSearch = document.querySelector('[data-ref="input-search"]');
	var keyupTimeout;

	var mixer = mixitup(container, {
		animation: {
			duration: 350
		},
		callbacks: {
			onMixEnd: handleMixEnd
		},
		callbacks: {
			onMixClick: function() {
				// Reset the search if a filter is clicked

				if (this.matches('[data-filter]')) {
					inputSearch.value = '';
				}
			}
		}
	});

	function handleMixEnd(state) {
		// At the end of each operation, we must check whether the current
		// matching collection of target elements has additional hidden
		// elements, and enable or disable the load more button as
		// appropriate

		if (state.activePagination.limit + incrementAmount >= state.totalMatching) {
		  // Disable button

		  loadMoreEl.disabled = true;
		} else if (loadMoreEl.disabled) {
		  // Enable button

		  loadMoreEl.disabled = false;
		}
	}

	function handleLoadMoreClick() {
		// On each click of the load more button, we increment
		// the current limit by a defined amount

		currentLimit += incrementAmount;

		mixer.paginate({limit: currentLimit});
	}

	loadMoreEl.addEventListener('click', handleLoadMoreClick);

	// Set up a handler to listen for "keyup" events from the search input

	inputSearch.addEventListener('keyup', function() {
		var searchValue;

		if (inputSearch.value.length < 3) {
			// If the input value is less than 3 characters, don't send

			searchValue = '';
		} else {
			searchValue = inputSearch.value.toLowerCase().trim();
		}

		// Very basic throttling to prevent mixer thrashing. Only search
		// once 350ms has passed since the last keyup event

		clearTimeout(keyupTimeout);

		keyupTimeout = setTimeout(function() {
			filterByString(searchValue);
		}, 350);
	});

	/**
	 * Filters the mixer using a provided search string, which is matched against
	 * the contents of each target's "class" attribute. Any custom data-attribute(s)
	 * could also be used.
	 *
	 * @param  {string} searchValue
	 * @return {void}
	 */

	function filterByString(searchValue) {
		if (searchValue) {
			// Use an attribute wildcard selector to check for matches

			mixer.filter('[class*="' + searchValue + '"]');
		} else {
			// If no searchValue, treat as filter('all')

			mixer.filter('all');
		}
	}
});

jQuery(document).ready(function( $ ) {
	var containerEl = document.querySelector('.mixitup-faq');
	var selectFilter = document.querySelector('.select-filter');
	var initialFilter = 'all';
	var hash = window.location.hash.replace(/^#/g, '');

	if (!containerEl) {
		return false;
	}
	if (hash) {
		initialFilter = '.' + hash;
	}

	var mixer = mixitup(containerEl, {
		animation: {
			duration: 100,
			nudge: true,
			reverseOut: false,
		},
		load: {
			filter: initialFilter
		}
	});


});
