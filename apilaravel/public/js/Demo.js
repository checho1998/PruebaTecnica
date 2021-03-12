$(window).on("load",function(){
    
})

function getAll(){
    $.ajax({ 
        type:"GET",
        data:{},
        url:'/all',
        success:function(values){
            $("#obtener").text(JSON.stringify(values))
        } 
    })
}

function post(){
    $.ajax({ 
        type:"POST",
        data:{
            "userId": 1000,
            "id": 1000,
            "title": "sergiooo",
            "completed": false
            },
        url:'/insert',
        success:function(values){
            $("#insert").text(JSON.stringify(values))
        } 
    })
}

function delete1(){
    $.ajax({ 
        type:"GET",
        data:{ },
        url:'/delete/1',
        success:function(values){
            alert("eliminado exitoso")
        } 
    })
}

function update(){
    $.ajax({ 
        type:"PUT",
        data:{ 
            "userId": 1,
            "id": 1,
            "title": "hola sergio",
            "completed": false
        },
        url:'/update',
        success:function(values){
            $("#update").text(JSON.stringify(values))
        } 
    })
}