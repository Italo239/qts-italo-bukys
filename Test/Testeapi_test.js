import {
    assertEquals,
    assertStringIncludes,
    assertArrayIncludes,
} from "http://deno.land/std/testing/asserts.ts"

let aluno = 'Clóvis José'
let professor = ['João', 'Lais', 'Davi', 'Nachara']

Deno.test("Teste de assertions (API)", () => {
    assertEquals(aluno, "Clóvis José");
    assertStringIncludes(aluno, "José");
})

Deno.test("Testando array do professor (API)", ()=> {
    assertArrayIncludes(professor, 
        ["Davi", "Lais", "Alan"],
        "Opa! Algo deu errado!"
    );
})