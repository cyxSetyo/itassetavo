<?php

return [

    'undeployable' 		=> '<strong>Warning: </strong> Το περιουσιακό αυτό στοιχείο έχει επισημανθεί ως επί του παρόντος undeployable.
                        Εάν αυτή η κατάσταση έχει αλλάξει, παρακαλούμε να ενημερώσετε την κατάσταση των περιουσιακών στοιχείων.',
    'does_not_exist' 	=> 'To πάγιο δεν υπάρχει.',
    'does_not_exist_or_not_requestable' => 'That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'Αυτό το στοιχείο είναι συνήθως αποσυνδεδεμένο από έναν χρήστη και δεν μπορεί να διαγραφεί. Ελέγξτε πρώτα το στοιχείο και, στη συνέχεια, δοκιμάστε ξανά τη διαγραφή.',

    'create' => [
        'error'   		=> 'Το περιουσιακού στοιχείο δεν δημιουργήθηκε, παρακαλώ προσπαθήστε ξανά. :(',
        'success' 		=> 'Το πάγιο δημιουργήθηκε επιτυχώς',
    ],

    'update' => [
        'error'   			=> 'Το πάγιο δεν ενημερώθηκε, παρακαλώ προσπαθήστε ξανά',
        'success' 			=> 'Τα περιουσιακά στοιχεία ενημερώθηκαν επιτυχώς.',
        'nothing_updated'	=>  'Δεν επιλέχθηκαν πεδία, επομένως τίποτα δεν ενημερώθηκε.',
        'no_assets_selected'  =>  'No assets were selected, so nothing was updated.',
    ],

    'restore' => [
        'error'   		=> 'Το ενεργητικό δεν έχει αποκατασταθεί, δοκιμάστε ξανά',
        'success' 		=> 'Τα πάγια επαναφέρθηκαν επιτυχώς.',
        'bulk_success' 		=> 'Asset restored successfully.',
        'nothing_updated'   => 'No assets were selected, so nothing was restored.', 
    ],

    'audit' => [
        'error'   		=> 'Ο έλεγχος στοιχείων ενεργητικού ήταν ανεπιτυχής. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'success' 		=> 'Ο έλεγχος περιουσιακών στοιχείων ολοκληρώθηκε με επιτυχία.',
    ],


    'deletefile' => [
        'error'   => 'Το αρχείο δεν έχει διαγραφεί. Παρακαλώ δοκιμάστε ξανά.',
        'success' => 'Το αρχείο διαγράφηκε με επιτυχία.',
    ],

    'upload' => [
        'error'   => 'Τα αρχεία δεν μεταφορτώθηκαν. Παρακαλώ δοκιμάστε ξανά.',
        'success' => 'Τα αρχεία ενημερώθηκαν με επιτυχία.',
        'nofiles' => 'Δεν έχετε επιλέξει οποιαδήποτε αρχείο για μεταφόρτωση ή το αρχείο που προσπαθείτε να φορτώσετε είναι πάρα πολύ μεγάλο',
        'invalidfiles' => 'Ένα ή περισσότερα από τα αρχεία σας είναι πολύ μεγάλα ή είναι τύπου αρχείου που δεν επιτρέπεται. Τα επιτρεπόμενα αρχεία τύπου png, gif, jpg, doc, docx, pdf και txt.',
    ],

    'import' => [
        'error'                 => 'Ορισμένα στοιχεία δεν έχουν εισαχθεί σωστά.',
        'errorDetail'           => 'Τα παρακάτω στοιχεία δεν εισήχθησαν εξαιτίας σφαλμάτων.',
        'success'               => 'Το αρχείο σας έχει εισαχθεί',
        'file_delete_success'   => 'Το αρχείο σας έχει διαγραφεί με επιτυχία',
        'file_delete_error'      => 'Το αρχείο δεν μπόρεσε να διαγραφεί',
        'file_missing' => 'The file selected is missing',
        'header_row_has_malformed_characters' => 'One or more attributes in the header row contain malformed UTF-8 characters',
        'content_row_has_malformed_characters' => 'One or more attributes in the first row of content contain malformed UTF-8 characters',
    ],


    'delete' => [
        'confirm'   	=> 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το πάγιο;',
        'error'   		=> 'Παρουσιάστηκε ένα ζήτημα κατάργησης του στοιχείου. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'nothing_updated'   => 'Δεν επιλέχθηκαν στοιχεία ενεργητικού, οπότε τίποτα δεν διαγράφηκε.',
        'success' 		=> 'Το πάγιο διαγράφηκε με επιτυχία.',
    ],

    'checkout' => [
        'error'   		=> 'Το περιουσιακό στοιχείο δεν έχει ελεγχθεί, δοκιμάστε ξανά',
        'success' 		=> 'Το ενεργητικό ολοκληρώθηκε με επιτυχία.',
        'user_does_not_exist' => 'Αυτός ο χρήστης είναι άκυρος. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'not_available' => 'Αυτό το πάγιο δεν είναι διαθέσιμο για την ολοκλήρωση της παραγγελίας!',
        'no_assets_selected' => 'Πρέπει να επιλέξετε τουλάχιστον ένα στοιχείο προς δημοσίευση.',
    ],

    'checkin' => [
        'error'   		=> 'Το στοιχείο δεν έχει επιλεγεί, δοκιμάστε ξανά',
        'success' 		=> 'Το ενεργό στοιχείο ολοκληρώθηκε με επιτυχία.',
        'user_does_not_exist' => 'Αυτός ο χρήστης δεν υπάρχει. Παρακαλώ δοκιμάστε ξανά.',
        'already_checked_in'  => 'Το στοιχείο αυτό έχει ήδη ελεγχθεί.',

    ],

    'requests' => [
        'error'   		=> 'Το στοιχείο δεν ζητήθηκε, δοκιμάστε ξανά',
        'success' 		=> 'Τα πάγια ενημερώθηκαν επιτυχώς.',
        'canceled'      => 'Η αίτηση πληρωμής ακυρώθηκε με επιτυχία',
    ],

];
