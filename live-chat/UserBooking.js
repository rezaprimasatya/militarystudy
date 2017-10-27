class UserBooking{
	constructor(nama,email,department){
		this.nama = nama
		this.email = email
		this.department = department
	}

	static getNama(){
		return this.nama
	}

	static getEmail(){
		return this.email
	}

	static getDepartment(){
		return this.department
	}
}

export default UserBooking