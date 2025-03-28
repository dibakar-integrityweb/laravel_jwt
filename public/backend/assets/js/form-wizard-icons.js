"use strict";
$(function() {
		var e = $(".select2"),
			t = $(".selectpicker");
		t.length && (t.selectpicker(), handleBootstrapSelectEvents()), e.length && e.each(function() {
			var e = $(this);
			select2Focus(e), e.wrap('<div class="position-relative"></div>'), e.select2({
				placeholder: "Select value",
				dropdownParent: e.parent()
			})
		})
	}),
	function() {
		var e = document.querySelector(".wizard-icons-example");
		if (null !== e) {
			var t = [].slice.call(e.querySelectorAll(".btn-next")),
				l = [].slice.call(e.querySelectorAll(".btn-prev")),
				c = e.querySelector(".btn-submit");
			const r = new Stepper(e, {
				linear: !1
			});
			t && t.forEach(e => {
				e.addEventListener("click", e => {
					r.next()
				})
			}), l && l.forEach(e => {
				e.addEventListener("click", e => {
					r.previous()
				})
			}), c && c.addEventListener("click", e => {
				alert("Submitted..!!")
			})
		}
		e = document.querySelector(".wizard-vertical-icons-example");
		if (null !== e) {
			t = [].slice.call(e.querySelectorAll(".btn-next")), l = [].slice.call(e.querySelectorAll(".btn-prev")), c = e.querySelector(".btn-submit");
			const n = new Stepper(e, {
				linear: !1
			});
			t && t.forEach(e => {
				e.addEventListener("click", e => {
					n.next()
				})
			}), l && l.forEach(e => {
				e.addEventListener("click", e => {
					n.previous()
				})
			}), c && c.addEventListener("click", e => {
				alert("Submitted..!!")
			})
		}
		e = document.querySelector(".wizard-modern-icons-example");
		if (null !== e) {
			t = [].slice.call(e.querySelectorAll(".btn-next")), l = [].slice.call(e.querySelectorAll(".btn-prev")), c = e.querySelector(".btn-submit");
			const i = new Stepper(e, {
				linear: !1
			});
			t && t.forEach(e => {
				e.addEventListener("click", e => {
					i.next()
				})
			}), l && l.forEach(e => {
				e.addEventListener("click", e => {
					i.previous()
				})
			}), c && c.addEventListener("click", e => {
				alert("Submitted..!!")
			})
		}
		e = document.querySelector(".wizard-modern-vertical-icons-example");
		if (null !== e) {
			t = [].slice.call(e.querySelectorAll(".btn-next")), l = [].slice.call(e.querySelectorAll(".btn-prev")), c = e.querySelector(".btn-submit");
			const a = new Stepper(e, {
				linear: !1
			});
			t && t.forEach(e => {
				e.addEventListener("click", e => {
					a.next()
				})
			}), l && l.forEach(e => {
				e.addEventListener("click", e => {
					a.previous()
				})
			}), c && c.addEventListener("click", e => {
				alert("Submitted..!!")
			})
		}
	}();