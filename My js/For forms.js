function showForm(id) {
    document.getElementById('open-edit-' + id).hidden = true;
    document.getElementById('delete-edit-' + id).hidden = true;
    document.getElementById('reply-edit-' + id).hidden = true;
    document.getElementById('stealth-' + id).hidden = true;
    document.getElementById('edit-user-comment-' + id).hidden = false;
    document.getElementById('save-edit-user-comment-' + id).hidden = false;
    document.getElementById('cancel-edit-user-comment-' + id).hidden = false;
}

function cancelEdit(id) {
    document.getElementById('cancel-edit-user-comment-' + id).hidden = true;
    document.getElementById('save-edit-user-comment-' + id).hidden = true;
    document.getElementById('stealth-' + id).hidden = false;
    document.getElementById('edit-user-comment-' + id).hidden = true;
    document.getElementById('open-edit-' + id).hidden = false;
    document.getElementById('delete-edit-' + id).hidden = false;
    document.getElementById('reply-edit-' + id).hidden = false;
}

function showformReply(id) {
    document.getElementById('reply-text-' + id).hidden = false;
    document.getElementById('reply-edit-' + id).hidden = true;
    document.getElementById('save-reply-edit-' + id).hidden = false;
    document.getElementById('cancel-reply-edit-' + id).hidden = false;
}

function cancelReply(id) {
    document.getElementById('reply-text-' + id).hidden = true;
    document.getElementById('save-reply-edit-' + id).hidden = true;
    document.getElementById('cancel-reply-edit-' + id).hidden = true;
    document.getElementById('reply-edit-' + id).hidden = false;
}

function showallReply(id){
    document.getElementById('show-reply-all-' + id).hidden = true;
    document.getElementById('close-reply-all-' + id).hidden = false;
    document.getElementById('all-reply-com-' + id).hidden = false;
}

function closeallReply(id){
    document.getElementById('close-reply-all-' + id).hidden = true;
    document.getElementById('all-reply-com-' + id).hidden = true;
    document.getElementById('show-reply-all-' + id).hidden = false;
}


