</div>
<!-- /#wrapper -->

<script src="/js/admin.js"></script>
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckeditor/ckfinder.js"></script>
<script>
    /*Form advanced Init*/
    $(document).ready(function() {
        "use strict";

        /* Select2 Init*/
        $(".select2").select2();

        $('#datetimepicker1').datetimepicker({
            useCurrent: false,
            icons: {
                time: "far fa-clock",
                date: "far fa-calendar-alt",
                up: "fas fa-arrow-up",
                down: "fas fa-arrow-down"
            },
        }).on('dp.show', function() {
            if($(this).data("DateTimePicker").date() === null)
                $(this).data("DateTimePicker").date(moment());
        });

        /* Switchery Init*/
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch-1').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        var editor = CKEDITOR.replaceAll();
        CKFinder.setupCKEditor(editor);
    });
</script>



</body>

</html>