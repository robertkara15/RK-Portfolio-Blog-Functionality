// clear blog form function
function resetBlogForm(){
    if (confirm("Are you sure you want to clear content?"))
    {
        document.getElementById("blogTitle").value = "";
        document.getElementById("blogContent").value = "";
    }
    else
    {
        return false;
    }
}

// submit form validation
function formSubmitted(event)
{
    var blogTitle = document.getElementById("blogTitle").value;
    var blogContent = document.getElementById("blogContent").value;
    // both title and content missing
    if (blogContent == "" && blogTitle == "") 
    {
        alert("ERROR: TITLE AND CONTENT FIELDS MISSING");
        document.getElementById("blogTitle").style.borderColor = "red";
        document.getElementById("blogContent").style.borderColor = "red";
        event.preventDefault();
        return false;
    } 
    // only title missing
    else if (blogTitle == "") 
    {
        alert("ERROR: TITLE FIELD MISSING");
        document.getElementById("blogTitle").style.borderColor = "red";
        document.getElementById("blogContent").style.borderColor = "grey";
        event.preventDefault();
        return false;
    } 
    // only content missing
    else if (blogContent == "") 
    {
        alert("ERROR: CONTENT FIELD MISSING");
        document.getElementById("blogTitle").style.borderColor = "grey";
        document.getElementById("blogContent").style.borderColor = "red";
        event.preventDefault();
        return false;
    } 
    // successful blog post
    else 
    {
        document.getElementById("blogForm").submit();
    }
}