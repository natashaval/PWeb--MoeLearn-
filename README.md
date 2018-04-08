# PWeb--MoeLearn-


tambahan di Proyek Web2:

A. Session & Cookies
1. Register & login (differentiate session between admin and user)
2. Add cookies for login (if browser is closed, can open cookies)
3. Direct login to index, change login -> name (use session)
4. Direct register to login
5. Differentiate moemanga (admin >> view user submission; user >> submit ideas)
6. Differentiate shop (admin >> add, edit, delete; user >> buy) if user force forbidden 403

B. request post
1. login, register, moemanga enctype because of file img upload

C. request get
1. logout, delete item, edit item

D. Procedure
1. top up (should be positive integer use IF ELSE)
2. User buy item (should be money >= price)

E. File handling
1. submit limitation (extension, size) at moemanga remarks
2. File upload and save images to mangaideas folder
3. Admin can show user submission and download images, submitted by user

F. CRUD
1. Display item in shop
2. admin can add item
3. admin can delete item based on get[delete]
4. admin can edit item based on get[edit] (edit name,price,date + edit image)
