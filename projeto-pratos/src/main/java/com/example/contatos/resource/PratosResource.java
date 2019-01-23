package com.example.contatos.resource;

import java.util.List;

import javax.validation.Valid;

import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.contatos.model.Prato;
import com.example.contatos.repository.Pratos;



@RestController
@RequestMapping("/pratos")
public class PratosResource {
	
	@Autowired
	private Pratos pratos;
	
	@PostMapping
	public Prato adicionar(@Valid @RequestBody Prato prato) {
		return pratos.save(prato);
	}
	
	@GetMapping
	public List<Prato> listar() {
		return pratos.findAll();
	}
	
	@GetMapping("/{id}")
	public ResponseEntity<Prato> buscar(@PathVariable Long id) {
		Prato prato = pratos.findOne(id);
		
		if (prato == null) {
			return ResponseEntity.notFound().build();
		}
		
		return ResponseEntity.ok(prato);
	}
	
	@PutMapping("/{id}")
	public ResponseEntity<Prato> atualizar(@PathVariable Long id, 
			@Valid @RequestBody Prato prato) {
		Prato existente = pratos.findOne(id);
		
		if (existente == null) {
			return ResponseEntity.notFound().build();
		}
		
		BeanUtils.copyProperties(prato, existente, "id");
		
		existente = pratos.save(existente);
		
		return ResponseEntity.ok(existente);
	}

	@DeleteMapping("/{id}")
	public ResponseEntity<Void> remover(@PathVariable Long id) {
		Prato prato = pratos.findOne(id);
		
		if (prato == null) {
			return ResponseEntity.notFound().build();
		}
		
		pratos.delete(prato);
		
		return ResponseEntity.noContent().build();
	}
}











